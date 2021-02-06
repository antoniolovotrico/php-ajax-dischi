<!-- In the header section is contained the the top bar with the logo -->
<body>
        <div id="app">
            <header>
                <div class="top_bar">
                    <img src="../dist/img/logo.png" alt="logo">
                    <select v-model="selected">
                        <option value="0">All</option>
                        <option v-for="item in genre">{{item}}</option>
                    </select>
                </div>
            </header>