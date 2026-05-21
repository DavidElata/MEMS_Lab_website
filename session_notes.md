# MEMS Website Project — Session Notes

## Files
- **New website (local):** `C:\Users\elata\OneDrive - Technion\Documents\MEMS LAB\MEMS_Website\2026_Website\index.html`
- **Old website (live):** https://mems.technion.ac.il/

## Current Layout — Home Page (`index.html`)
- **Horizontal row of vertical portrait cards** — one card per paper
- Each card (260 px wide): journal label → image → title → abstract → "More information in the research tab"
- Left/right arrow buttons (◁/▷) scroll through all papers
- Horizontal scrollbar hidden; only arrows navigate
- Papers ordered **newest left → oldest right**
- Going forward: new entries are added to the **Research page only** (not the Home page)

### Current 5 cards (in order, left to right)
1. *Nonlinear Dynamics*, 2026 — Anisotropic pendulum — `Images/Anisotropic pendulum.png`
2. *Journal of Sound and Vibration*, 2025 — Rotating anisotropic rings — `Images/Rotating_anisotropic_rings.gif`
3. *IEEE Sensors Letters*, 2023 — Resonance — `Images/Resonanca.PNG`
4. *IEEE Journal of Microelectromechanical Systems*, 2021 — Floating rotor — `Images/Float.png`
5. *IEEE MEMS-2017* Conference — Twisting Beam — `Images/Twisting beam.png`

### Card styling (h2 labels)
- Font: Times New Roman, 14px, black, not bold, not all-caps; journal name italicized, year plain

### Changes made 2026-05-20
- Removed card: "Periodic Dzhanibekov-like transitions of the double pendulum" (was leftmost)
- Removed cards: "A new Mechanical Battery", "Dynamically Balanced Folded-Beam Suspensions", "A Classic Parametric Resonator" (were rightmost)
- Replaced "Read more…" links with plain text "More information in the research tab"
- h2 label styling: Times New Roman, 14px, black, normal weight, no all-caps, journal name italic
- All card images now use local files (no external URLs)

## Research Page (`research.html`)
Layout per entry: title → image/video floated left with abstract wrapping around it → citation(s) below. Journal names italicized, paper titles plain text. Nav bar links Home ↔ Research.

### Image folder
All images/videos are stored in `Images/`.

### DOI fixes applied (2026-05-18 session)
- Entry 5: swapped page numbers for jsss-14-147-2025 (147–152) and jsss-14-153-2025 (153–159)
- Entry 11: wrong DOI replaced: 10.1109/JMEMS.2015.2454593 → 10.1109/JMEMS.2016.2645878
- Entry 18: removed "dynamic" from paper title (official Crossref title has no "dynamic")
- Entry 21: corrected author spelling "Quevy" → "Quévy"
- All 25 entries DOI-verified ✓

### Current 25 entries (in order):
1. **The intermediate frequency effect / anisotropic pendulum** — video: `Images/Theta_large_2.mp4` — DOI: 10.1007/s11071-026-12324-y
2. Periodic Dzhanibekov-like transitions of the double pendulum — img: `Images/2026_JSV_Double_Pendulum.png` — DOI: 10.1016/j.jsv.2026.119785 ✓
3. **The elastic pendulum - Dzhanibekov-like transitions** — video: `Images/elastic_pendulum_symmetric_Dzhanibekov.mp4` — DOI: 10.1007/s11071-025-11242-9
4. **Flexural vibrations of anisotropic thin rotating rings** — img: `Images/Rotating_anisotropic_rings.gif` — DOIs: 10.1016/j.jsv.2023.117842, 10.1016/j.jsv.2024.118924
5. **On the optimal planform of a cantilever unimorph PVEH** — img: `Images/Trapeze.png` — DOIs: 10.1088/1361-665X/ad28d0, 10.5194/jsss-14-147-2025, 10.5194/jsss-14-153-2025
6. **Harmonic biasing in a double-sided comb-drive resonator** — img: `Images/Harmonic biasing.PNG` — DOI: 10.1016/j.sna.2021.113031
7. **What is the resonance of a linear mechanical resonator** — img: `Images/Resonanca.PNG` — DOI: 10.1109/LSENS.2023.3320566
8. **Parametric resonance / floating rotor** — img: `Images/Float.png` — DOIs: 10.1109/JMEMS.2020.3004831, 10.1109/JMEMS.2021.3065424
9. **Piezoelectric coupling factor** — img: `Images/Coupling factor.png` — DOI: 10.1177/1045389X20930104
10. **Frequency matching of orthogonal wineglass modes** — img: `Images/Frequency matching.png` — DOI: 10.1109/LSENS.2019.2901129
11. **MEMS parametric resonators** — img: `Images/MEMS parametric resonator.png` — DOIs: 10.1109/JMEMS.2015.2402223, 10.1109/JMEMS.2016.2645878
12. **A piezoelectric twisting beam actuator** — img: `Images/Twisting beam.png` — DOIs: 10.1109/JMEMS.2017.2731120, 10.1109/TRANSDUCERS.2017.7994472, 10.1109/TRANSDUCERS.2017.7994468
13. **Selective stiffening / thermoelastic actuators** — img: `Images/Thermal motion conversion.png` — DOI: 10.1109/JMEMS.2016.2603539
14. **Motion conversion mechanisms** — img: `Images/Motion conversion mechanisms.png` — DOIs: 10.1109/JMEMS.2015.2474151, 10.1109/MEMSYS.2016.7421841
15. **Mechanical rechargeable battery** — img: `Images/Mechanical battery.png` — DOI: 10.1109/JMEMS.2014.2382638
16. **Electromagnetic interaction force between two noncoaxial circular coils** — img: `Images/Two rings.png` — DOI: 10.1016/j.mechatronics.2015.07.009
17. **Dynamically-balanced folded-beam suspensions** — img: `Images/Dynamically balanced FBS.png` — DOI: 10.1109/JMEMS.2015.2454593
18. **A gap-closing electrostatic actuator with a linear extended range** — img: `Images/Linear extension.png` — DOI: 10.1109/JMEMS.2013.2276027
19. **An electret gap-closing transducer with a linear response** — img: `Images/SEPPA.png` — DOI: 10.1016/j.sna.2011.11.001
20. **Electromechanical sensing of charge retention on floating electrodes** — img: `Images/Charge pull in.png` — DOI: 10.1109/JMEMS.2010.2090499
21. **Differential internal dielectric transduction of a Lamé-mode resonator** — img: `Images/Lame dielectric.png` — DOI: 10.1088/0960-1317/20/11/115036
22. **Shield-layers for reducing thermoelastic damping in resonating Silicon bars** — img: `Images/Shield layers.png` — DOI: 10.1007/s00542-008-0667-3
23. **Measuring residual stress in conductive layers** — img: `Images/EMB_residual_stress.png` — DOI: 10.1109/JMEMS.2006.886015
24. **Electromechanical buckling** — img: `Images/EMB.png` — DOIs: 10.1016/j.ijsolstr.2005.03.006, 10.2140/jomms.2006.1.911
25. **Measuring the strength of brittle microbeams** — img: `Images/Breaking_beams.png` — DOI: 10.1109/JMEMS.2006.872237

### Pending / Next Steps
- DOI verification for research.html entries 19-25
- Publications page not yet built
- People and Contact pages built; "Technion - Israel Institute of Technology" subtitle removed from both
- All index.html card images now use local files
