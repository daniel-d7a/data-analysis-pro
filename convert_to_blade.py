import os
import re
import sys

# Configuration
ASSET_BASE_DIR = 'images/'  # The path where assets live on the server relative to public/
HTML_DIR = '.'  # Directory containing HTML files
OUTPUT_DIR = 'blade'  # Where to save .blade.php files
ROUTE_PREFIX = 'dapro.'  # Prefix for route names, e.g., 'course.'

def convert_html_to_blade(file_path):
    with open(file_path, 'r', encoding='utf-8') as f:
        content = f.read()

    # 1. Convert relative .html links to route() helper
    # Example: href="index.html#faq" -> href="{{ route('index') }}#faq"
    def replace_route(match):
        filename = match.group(1)
        anchor = match.group(2) if match.group(2) else ""
        route_name = f"{ROUTE_PREFIX}{filename}"
        return f'href="{{{{ route(\'{route_name}\') }}}}{anchor}"'

    content = re.sub(r'href="([^"/]+)\.html(#?[^"]*)"', replace_route, content)
    content = re.sub(r"href='([^'/]+)\.html(#?[^']*)'", replace_route, content)

    # 2. Convert assets (img src, link href, script src) to asset() helper
    # We look for paths starting with assets/ or ./assets/
    def replace_asset(match):
        attr = match.group(1)
        path = match.group(3)
        local_dir = match.group(4)
        new_path = path.replace(local_dir, ASSET_BASE_DIR, 1)
        return f'{attr}="{{{{ asset(\'{new_path}\') }}}}"'

    # Matches src="assets/..." or src="./assets/..." or href="assets/..." etc.
    asset_regex = r'(src|href)=["\'](\.?/?)((assets/|css/|js/|images/|img/)[^"\']+)["\']'
    content = re.sub(asset_regex, replace_asset, content)

    # 3. Handle specific asset path overrides if needed (e.g. if everything is in assets/)
    # The above regex already handles paths starting with assets/

    # Generate output path
    base_name = os.path.splitext(os.path.basename(file_path))[0]
    output_path = os.path.join(OUTPUT_DIR, f"{base_name}.blade.php")

    with open(output_path, 'w', encoding='utf-8') as f:
        f.write(content)
    
    print(f"Converted {file_path} -> {output_path}")

def main():
    global ROUTE_PREFIX
    if len(sys.argv) > 1:
        ROUTE_PREFIX = sys.argv[1]
    
    if not os.path.exists(OUTPUT_DIR):
        os.makedirs(OUTPUT_DIR)

    for file in os.listdir(HTML_DIR):
        if file.endswith('.html'):
            convert_html_to_blade(os.path.join(HTML_DIR, file))

if __name__ == "__main__":
    main()
