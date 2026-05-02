import os
import re

source_dir = r"C:\Users\PC\Pictures\strzone-main"
target_dir = r"d:\karimgithub\strzone"

files_to_process = [
    "index.html",
    "plans.html",
    "promos.html",
    "contact.html",
    "channels.html",
    "channels-basic.html",
    "channels-premium.html",
    "channels-vip.html",
    "enpane.html"
]

page_titles = {
    "index.html": ("Streaming Illimité", "home"),
    "plans.html": ("Nos Plans d'Abonnement", "plans"),
    "promos.html": ("Promotions", "promos"),
    "contact.html": ("Contact", "contact"),
    "channels.html": ("Bouquets", "channels"),
    "channels-basic.html": ("Bouquet Basic", "channels"),
    "channels-premium.html": ("Bouquet Premium", "channels"),
    "channels-vip.html": ("Bouquet VIP", "channels"),
    "enpane.html": ("Maintenance", "none")
}

for filename in files_to_process:
    source_path = os.path.join(source_dir, filename)
    if not os.path.exists(source_path):
        print(f"File {filename} not found in {source_dir}")
        continue
        
    with open(source_path, 'r', encoding='utf-8') as f:
        content = f.read()
        
    # Extract page content
    match = re.search(r'(<div class="page-content">.*?)(?=<!-- FOOTER -->)', content, re.DOTALL)
    if not match:
        print(f"Could not find page-content and FOOTER in {filename}")
        continue
        
    page_content = match.group(1).strip()
    
    title, active = page_titles.get(filename, ("Page", ""))
    
    php_content = f"""<?php
$pageTitle = "{title}";
$activePage = '{active}';
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

# Also copy CSS and JS just in case they were updated
import shutil
for folder in ['css', 'js', 'png']:
    src_folder = os.path.join(source_dir, folder)
    dst_folder = os.path.join(target_dir, folder)
    if os.path.exists(src_folder):
        print(f"Copying {folder}...")
        shutil.copytree(src_folder, dst_folder, dirs_exist_ok=True)
