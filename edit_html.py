import re
import os

filepath = r'C:\Users\elata\OneDrive - Technion\Documents\MEMS LAB\MEMS_Website\2026_Website\index.html'

with open(filepath, 'r', encoding='utf-8') as f:
    html = f.read()

# Revert <h3> tags back to removing date
html = re.sub(r'<h3>(.*?) \(\d{4}\)</h3>', r'<h3>\1</h3>', html)

# Add dates to <h2> tags based on the papers
replacements = {
    'A new Mechanical Battery': '2016',
    'Dynamically Balanced Folded-Beam Suspensions': '2012',
    'A Classic Parametric Resonator': '2012',
    'A Piezoelectric Twisting Beam': '2017',
    'Parametric Resonators With a Floating Rotor': '2021',
    'Harmonic biasing in a double-sided comb-drive': '2021',
    'What is the Resonance of a Linear Mechanical Resonator': '2023',
    'Flexural vibrations of anisotropic thin rotating rings': '2025',
    'The intermediate frequency effect and Dzhanibekov-like transitions': '2026',
    'Periodic Dzhanibekov-like transitions of the double pendulum': '2026'
}

# The basic structure is:
# <h2>Journal Name</h2>
# <div class="content-wrapper">
# ...
# <h3>Title</h3>

for title_part, year in replacements.items():
    # We find the <h2> just before the corresponding <h3>
    # We match <h2>...</h2> that does not contain '<h2>' inside it up to the h3
    pattern = r'(<h2>)(.*?)(</h2>\s*<div class="content-wrapper">.*?</h3)'
    
    # We do a functional replacement to only insert the year if the block has the title_part
    def repl(m):
        # m.group(0) is the entire match from <h2> to </h3>
        # We need to make sure the title_part is in m.group(0), but since we can't easily capture it all safely, let's do this:
        pass

# A simpler way: Find all sub-window blocks, modify the h2 and h3.
blocks = re.split(r'(<div class="sub-window">)', html)
for i in range(len(blocks)):
    block = blocks[i]
    if '<h2>' in block and '<h3' in block:
        # Check which title this is
        for title_part, year in replacements.items():
            if title_part in block:
                # Modify h2 to append year
                block = re.sub(r'(<h2>.*?)(</h2>)', r'\1, ' + year + r'\2', block)
                break
        blocks[i] = block

with open(filepath, 'w', encoding='utf-8') as f:
    f.write(''.join(blocks))

print("Done")
