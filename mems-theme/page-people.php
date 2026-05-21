<?php get_header(); ?>

    <main>

        <!-- Head of Group -->
        <section>
            <h2>Head of Group</h2>
            <div class="pi-card">
                <div class="pi-photo">
                    <img src="https://mems.technion.ac.il/files/2025/06/Elata_Apr_2018-232x300.jpg" alt="Prof. David Elata">
                </div>
                <div class="pi-info">
                    <h3>Prof. David Elata</h3>
                    <div class="pi-contact">
                        Phone: +972-4-829-3184<br>
                        Office: Dan Kahn, 221<br>
                        <a href="mailto:elata@technion.ac.il">elata@technion.ac.il</a>
                    </div>
                    <p class="pi-bio">
                        <strong>David Elata</strong> has a D.Sc. in Mechanical Engineering from the Technion –
                        Israel Institute of Technology, 1993, and since 1996 he holds an academic position at the
                        Technion. His research interests include modeling and design of MEMS actuators, and
                        development of novel concepts for MEMS devices. He has been serving the MEMS community
                        as an Editor of the <em>IEEE-JMEMS</em>, 2008–24, as a Senior Editor of
                        <em>IEEE-Sensors Letters</em>, 2017–24, and he has been serving as a member of the TPCs
                        of leading conferences in the field.
                    </p>
                </div>
            </div>
        </section>

        <!-- Current Students -->
        <section>
            <h2>Current Students</h2>
            <div class="students-grid">
                <div class="student-card">
                    <div class="degree-label">Ph.D. Student</div>
                    <h3>David Rosenstock</h3>
                    <div class="contact">
                        <a href="mailto:rosenstock@campus.technion.ac.il">rosenstock@campus.technion.ac.il</a><br>
                        Office: Lady Davis, 460
                    </div>
                </div>
                <div class="student-card">
                    <div class="degree-label">Ph.D. Student</div>
                    <h3>Eli Benvenisty</h3>
                    <div class="contact">
                        <a href="mailto:elibelib22@campus.technion.ac.il">elibelib22@campus.technion.ac.il</a><br>
                        Office: Lady Davis, 460
                    </div>
                </div>
                <div class="student-card">
                    <div class="degree-label">M.Sc. Student</div>
                    <h3>Ido Kosover</h3>
                    <div class="contact">
                        <a href="mailto:ido.kosover@campus.technion.ac.il">ido.kosover@campus.technion.ac.il</a><br>
                        Office: Lady Davis, 460
                    </div>
                </div>
                <div class="student-card">
                    <div class="degree-label">M.Sc. Student</div>
                    <h3>Yehonatan Landwer</h3>
                    <div class="contact">
                        <a href="mailto:yehonathanl@campus.technion.ac.il">yehonathanl@campus.technion.ac.il</a><br>
                        Office: Lady Davis, 460
                    </div>
                </div>
                <div class="student-card">
                    <div class="degree-label">M.Sc. Student</div>
                    <h3>Ori Partok</h3>
                    <div class="contact">
                        <a href="mailto:ori.partok@campus.technion.ac.il">ori.partok@campus.technion.ac.il</a><br>
                        Office: Lady Davis, 460
                    </div>
                </div>
                <div class="student-card">
                    <div class="degree-label">Undergraduate Student</div>
                    <h3>Itay Nachum</h3>
                    <div class="contact">
                        <a href="mailto:itay.nachum@campus.technion.ac.il">itay.nachum@campus.technion.ac.il</a><br>
                        Office: Lady Davis, 460
                    </div>
                </div>
            </div>
        </section>

        <!-- Alumni -->
        <section>
            <h2>Alumni</h2>
            <div class="table-controls">
                <label for="alumni-search">Search:</label>
                <input type="search" id="alumni-search" placeholder="Filter alumni…">
            </div>
            <table class="alumni-table" id="alumni-table">
                <thead>
                    <tr>
                        <th data-col="0">Name <span class="sort-icon">▲▼</span></th>
                        <th data-col="1">Currently <span class="sort-icon">▲▼</span></th>
                        <th data-col="2">When <span class="sort-icon">▲▼</span></th>
                        <th data-col="3">Research Topic <span class="sort-icon">▲▼</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td><a href="http://www.mre-rope.com/" target="_blank" rel="noopener">Dr. Ronen Ashkenazi</a></td><td>Founder, M.R.E., Israel.</td><td>Ph.D., 2001–2004</td><td>Fatigue of steel wire ropes</td></tr>
                    <tr><td>Dr. Samy Abu-Salih</td><td>Braude College of Engineering, Karmiel, Israel.</td><td>Ph.D., 2002–2006</td><td>Modeling and analysis of electromechanical buckling with application to novel MEMS devices</td></tr>
                    <tr class="has-continuation"><td>Dr. Rashed Mahameed</td><td>Currently with Apple, Israel.</td><td>Ph.D., 2003–2006</td><td>Thermal effects in micro-systems, and application in novel micro-devices</td></tr>
                    <tr class="continuation"><td></td><td></td><td>M.Sc., 2001–2003</td><td>A novel thermoelastic actuation scheme for micro resonators</td></tr>
                    <tr class="has-continuation"><td>Dr. Saar Golan</td><td>Adjunct member, Technion &amp; Ariel University, Israel.</td><td>Ph.D., 2003–2007</td><td>Differentiation of multi species biofluids by dielectrophoretic field flow fractionation</td></tr>
                    <tr class="continuation"><td></td><td></td><td>M.Sc., 2000–2002</td><td>The relationship between the anatomy of the Canaliculi, the pressure at its ends and the blood flow through it</td></tr>
                    <tr class="has-continuation"><td>Dr. Vitaly Leus</td><td></td><td>Ph.D., 2005–2009</td><td>New efficient methods for modeling, design and actuation of electrostatic micro mechanical devices</td></tr>
                    <tr class="continuation"><td></td><td></td><td>M.Sc., 2003–2005</td><td>Modeling the static and dynamic responses of electrostatic MEMS switches</td></tr>
                    <tr class="has-continuation"><td>Dr. Arnon Hirshberg</td><td></td><td>Ph.D., 2005–2013</td><td>Mechanical coupling in deformable structures in micro-systems</td></tr>
                    <tr class="continuation"><td></td><td></td><td>M.Sc., 2002–2004</td><td>Novel test devices for measuring mechanical properties of MEMS structures</td></tr>
                    <tr class="has-continuation"><td>Dr. Shai Shmulevich</td><td></td><td>Ph.D., 2012–2016</td><td>Enhancing the functionality of MEMS actuators by tailoring nonlinear effects</td></tr>
                    <tr class="continuation"><td></td><td></td><td>M.Sc., 2010–2012</td><td>Measures of the response of electromechanical resonators</td></tr>
                    <tr class="has-continuation"><td>Dr. Inbar (Hotzen) Greenberg</td><td></td><td>Ph.D., 2013–2017</td><td>Smart micro structures: directional features for enhancing the performance of micro-transducers</td></tr>
                    <tr class="continuation"><td></td><td></td><td>M.Sc., 2011–2013</td><td>MEMS resonators</td></tr>
                    <tr class="has-continuation"><td>Dr. Danny A. Kassie</td><td></td><td>Ph.D., 2016–2022</td><td>Investigation of the response of resonators and parametric resonators</td></tr>
                    <tr class="continuation"><td></td><td></td><td>M.Sc., 2015–2016</td><td>Thermally compensated folded-beam suspension</td></tr>
                    <tr><td>Dani Strasser</td><td></td><td>M.Sc., 1999–2003</td><td>Binding layers for delaying damage in electronic boards</td></tr>
                    <tr><td>Eyal Elka</td><td></td><td>M.Sc., 2003–2004</td><td>The electromechanical response of multi-layered piezoelectric structures</td></tr>
                    <tr><td>Matan Naftali</td><td>CEO and Founder, Maradin Ltd.</td><td>M.Sc., 2002–2004</td><td>Towards a linear response of vertical comb-drive actuators</td></tr>
                    <tr><td>Ofir Barzely</td><td></td><td>M.Sc., 2003–2005</td><td>Double sided comb drive with latching stators to minimize actuation voltages</td></tr>
                    <tr><td>Shay Yulzary</td><td></td><td>M.Sc., 2005–2008</td><td>Electromechanical instabilities in MEMS</td></tr>
                    <tr><td>Michael Lerman</td><td></td><td>M.Sc., 2008–2010</td><td>The quality of quality-factor in micro resonators</td></tr>
                    <tr><td>Alon Benhaim</td><td></td><td>M.Sc., 2009–2011</td><td>Self-alignment using electromagnetic induction for mass</td></tr>
                    <tr><td>Ben Rivlin</td><td></td><td>M.Sc., 2011–2012</td><td>Non-linear springs for achieving prescribed electromechanical transduction</td></tr>
                    <tr><td>Osher Shapira</td><td></td><td>M.Sc., 2011–2013</td><td>Implementation of electromagnetic induction in finite rectangular loops for self-alignment and levitation</td></tr>
                    <tr><td>Tal Rubin</td><td></td><td>M.Sc., 2011–2013</td><td>A simple constitutive model for dielectric charging based on Frenkel-Poole mechanism and a derivation of Maxwell stresses</td></tr>
                    <tr><td>Ido Zaltzman</td><td></td><td>M.Sc., 2012–2015</td><td>Electromechanical Franklin oscillators</td></tr>
                    <tr><td>Daniel Ekeltchik</td><td></td><td>M.Sc., 2014–2015</td><td>MEMS devices for measuring strength of microbeams</td></tr>
                    <tr><td>Aharon Joffe</td><td></td><td>M.Sc., 2014–2016</td><td>Parametric amplification in electrostatic resonators</td></tr>
                    <tr><td>Nadav Maccabi</td><td></td><td>M.Sc., 2016–2017</td><td>Enhancing the functionality of unimorph piezoelectric actuators</td></tr>
                    <tr><td>Ohad Berman</td><td>GE Medical</td><td>M.Sc., 2008–2017</td><td>Process Development for a Dielectric Resonator</td></tr>
                    <tr><td>Eli Benvenisty</td><td></td><td>M.Sc., 2018–2019</td><td>Vibration mode order in mechanical disk resonators</td></tr>
                    <tr><td>Sahar Lustig</td><td></td><td>M.Sc., 2019–2020</td><td>Piezoelectric Actuators and Vibrating Energy Harvesters</td></tr>
                    <tr><td>Shir Benita</td><td></td><td>M.Sc., 2020–2021</td><td>Single-crystalline piezoelectric linear actuators</td></tr>
                    <tr><td>Sivan Levi</td><td></td><td>M.Sc., 2020–2021</td><td>Wineglass mode resonators with optimized geometry for mode matching and mode ordering</td></tr>
                    <tr><td>Eyal Ben-Yosef</td><td></td><td>M.Sc., 2019–2022</td><td>Piezoelectric actuators</td></tr>
                    <tr><td>David Rosenstock</td><td></td><td>M.Sc., 2020–2022</td><td>The nonlinear dynamics of vibrating rings</td></tr>
                    <tr><td>Lior Musnikov</td><td></td><td>M.Sc., 2019–2022</td><td>The nonlinear dynamics of vibrating beams</td></tr>
                    <tr><td>Assaf Menashe</td><td></td><td>M.Sc., 2020–2022</td><td>Coriolis vibratory gyroscopes operated by auto-resonance driving</td></tr>
                    <tr><td>Itamar Shoham</td><td></td><td>M.Sc., 2020–2022</td><td>Surface waves in single-crystalline piezoelectric actuators</td></tr>
                    <tr><td>Julian Levinton</td><td></td><td>M.Sc., 2021–2022</td><td>Single crystalline piezoelectric actuators</td></tr>
                    <tr><td>Elia Salman</td><td></td><td>M.Sc., 2023–2024</td><td>Vibration of cantilever beams, with application to piezoelectric vibrating energy harvester (PVEH) devices</td></tr>
                    <tr><td>Malachi Michelin</td><td></td><td>M.Sc., 2023–2024</td><td>Auto resonance driving of frequency modulated Coriolis vibratory gyroscopes</td></tr>
                    <tr><td>Gil Cahana</td><td></td><td>M.Sc., 2019–2025</td><td>A continuously tunable multistable electrostatic transducer</td></tr>
                    <tr><td>Lior Zaidenberg</td><td></td><td>M.Sc., 2024–2026</td><td>Nonlinear resonators: emphasis on parametric and perfect resonance</td></tr>
                    <tr><td>Alon Zalts</td><td></td><td>M.Sc., 2024–2026</td><td>Mechanical and electrotechnical springs</td></tr>
                </tbody>
            </table>
            <div class="table-info" id="table-info"></div>
        </section>

    </main>

    <script>
        (function () {
            var searchInput = document.getElementById('alumni-search');
            var tableBody   = document.querySelector('#alumni-table tbody');
            var tableInfo   = document.getElementById('table-info');
            var allRows     = Array.from(tableBody.querySelectorAll('tr'));

            function updateInfo(visible) {
                tableInfo.textContent = 'Showing ' + visible + ' of ' + allRows.length + ' entries';
            }

            searchInput.addEventListener('input', function () {
                var q = this.value.toLowerCase();
                var visible = 0;
                allRows.forEach(function (row) {
                    var match = row.textContent.toLowerCase().includes(q);
                    row.style.display = match ? '' : 'none';
                    if (match) visible++;
                });
                updateInfo(visible);
            });

            var sortCol = -1, sortAsc = true;
            document.querySelectorAll('#alumni-table th').forEach(function (th) {
                th.addEventListener('click', function () {
                    var col = parseInt(this.dataset.col);
                    if (sortCol === col) {
                        sortAsc = !sortAsc;
                    } else {
                        sortCol = col;
                        sortAsc = true;
                    }
                    document.querySelectorAll('#alumni-table th .sort-icon').forEach(function (s) {
                        s.textContent = '▲▼';
                    });
                    this.querySelector('.sort-icon').textContent = sortAsc ? '▲' : '▼';

                    var rows = Array.from(tableBody.querySelectorAll('tr'));
                    rows.sort(function (a, b) {
                        var at = (a.cells[col] ? a.cells[col].textContent : '').trim().toLowerCase();
                        var bt = (b.cells[col] ? b.cells[col].textContent : '').trim().toLowerCase();
                        return sortAsc ? at.localeCompare(bt) : bt.localeCompare(at);
                    });
                    rows.forEach(function (r) { tableBody.appendChild(r); });
                    updateInfo(allRows.filter(function (r) { return r.style.display !== 'none'; }).length);
                });
            });

            updateInfo(allRows.length);
        })();
    </script>

<?php get_footer(); ?>
