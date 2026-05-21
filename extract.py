import os
import fitz

d = r'C:\Users\elata\OneDrive - Technion\Documents\MEMS LAB\MEMS_Website\2026_Website'
files = [
    '2021_JMEMS_Hi_Freq_PR.pdf', 
    '2021_SnA_Harmonic_Biassing.pdf', 
    '2023_SENSORS_Letters_Resonance.pdf', 
    '2025_JSV_rotating_anisotropic_rings.pdf', 
    '2026_Nonlinear_Dynamics_Anisotropic_Pendulum.pdf', 
    '2026_JSV_Double_Pendulum.pdf'
]

print('Extracting text from new PDF:')
doc = fitz.open(os.path.join(d, '2026_JSV_Double_Pendulum.pdf'))
print(doc[0].get_text()[:600])
doc.close()

print('\nExtracting images:')
for f in files:
    try:
        doc = fitz.open(os.path.join(d, f))
        for page in doc:
            image_list = page.get_images()
            if image_list:
                xref = image_list[0][0]
                base_img = doc.extract_image(xref)
                img_bytes = base_img['image']
                ext = base_img['ext']
                img_name = os.path.splitext(f)[0] + f'.{ext}'
                with open(os.path.join(d, img_name), 'wb') as img_file:
                    img_file.write(img_bytes)
                print(f'Saved {img_name}')
                break
        doc.close()
    except Exception as e:
        print(f"Error on {f}: {e}")
