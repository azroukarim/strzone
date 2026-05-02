import os
import re

source_dir = r"C:\Users\PC\Pictures\strzone-main"
target_dir = r"d:\karimgithub\strzone"

files_to_process = [
    "channels.html",
    "channels-basic.html",
    "channels-premium.html",
    "channels-vip.html",
    "enpane.html"
]

page_titles = {
    "channels.html": ("Bouquets", "channels"),
    "channels-basic.html": ("Bouquet Basic", "channels"),
    "channels-premium.html": ("Bouquet Premium", "channels"),
    "channels-vip.html": ("Bouquet VIP", "channels"),
    "enpane.html": ("Maintenance", "none")
}

for filename in files_to_process:
    source_path = os.path.join(source_dir, filename)
    if not os.path.exists(source_path):
        continue
        
    with open(source_path, 'r', encoding='utf-8') as f:
        content = f.read()
        
    # Find start of page content
    start_match = re.search(r'<div class="page-content">', content)
    if not start_match:
        print(f"Could not find start in {filename}")
        continue
    start_idx = start_match.start()
    
    # Find end of page content (before footer)
    # The footer usually starts with <div class="bg-movie">\s*<div class="section-content">\s*<div class="custom-footer">
    end_match = re.search(r'<div class="bg-movie">\s*<div class="section-content">\s*<div class="custom-footer">', content[start_idx:])
    if not end_match:
        # Check for other footer indicators or just the end of page-content
        end_match = re.search(r'<a href="https://wa\.me/212670965351" class="wa-small-btn"', content[start_idx:])
        
    if not end_match:
        print(f"Could not find end in {filename}")
        continue
        
    end_idx = start_idx + end_match.start()
    
    # Check if there are extra scripts
    extra_scripts = ""
    scripts_match = re.search(r'(<script>.*?</script>)\s*</body>', content, re.DOTALL)
    if scripts_match:
        extra_scripts = scripts_match.group(1).strip()
        
    page_content = content[start_idx:end_idx].strip()
    
    # Remove any extra trailing </div> if needed, but it should be fine.
    
    title, active = page_titles.get(filename, ("Page", ""))
    
    php_content = f"""<?php
$pageTitle = "{title}";
$activePage = '{active}';
"""
    if extra_scripts:
        php_content += f"""ob_start();
?>
{extra_scripts}
<?php
$extraFooter = ob_get_clean();
"""
    php_content += f"""
include 'header.php';
?>

{page_content}

<?php include 'footer.php'; ?>
"""
    
    target_filename = filename.replace(".html", ".php")
    target_path = os.path.join(target_dir, target_filename)
    
    with open(target_path, 'w', encoding='utf-8') as f:
        f.write(php_content)
        
    print(f"Successfully converted {filename} to {target_filename}")
