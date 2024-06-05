<!DOCTYPE>
<html>

    <head>
        <title>Pavesini</title>
        <link rel="stylesheet" href="shop.css">
        <script src="shop.js" defer></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
    </head>

    <div ><img id="immagine_omino" src='icons8-accessibilità-2-50.png'></div>

    <body>
        
        <header>
            <nav>
            <div id="omino-login">
                <div><a href="login.php">L</a></div>
            </div>
            <div>
                <img id="logo" src="https://www.pavesini.it/wp-content/themes/pavesini-new/images/logo_desktop.png">
            </div>
            <div id="barra">
                <a href="index.php">home</a>
                <a  href="shop.php">pavesi</a>
                <a id="prodotto" href="https://www.pavesini.it/prodotti/">prodotti</a>
                <div class="hidden" >
                     <div id="prodotti"> 
                        <a href="https://www.pavesini.it/pavesini/snack/">SNACK </br></a>
                        <a href="https://www.pavesini.it/pavesini/gelati/">GELATI</a>
                    </div>
                </div>
                <a  id="concorso" > concorsi </a>
                <div id="vinciconc" class="hidden" > 
                    <a href="https://www.pavesini.it/concorsi/vinci-e-parti-2024/">VINCI</br> E </br>PARTI</br> </a>
                </div>
                <a href="https://www.pavesini.it/ricette/">ricette</a>
            </div>

            <div id="icon">

                <div class="border_icone">
                    <a href="https://www.facebook.com/pavesiniofficial">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAABqUlEQVR4nO2VO07DQBCGBwooKCgQQjxFyQGoqUACicSzQT4ED4cj5AzpQBDAMyFIaREPcQuqBHEEqiQ0KEFBa/NIhL0ZOw6iyC9NY3n9+Z+ZnQEY6t/JdpdAsQPI96CoCopf/aCq9wzpAKyrxQSBF/Og+BiQWqC4bQzkd1BcBut8uT+oRQhIjZ7A31EHxel4UOTDTwdRoR3uKRvDKceHdqde6Fzxgiy9dA2Z4hqgOwWb+XFIlWYAqRKY9nRpTgCmgsDJA+RyowHleQx+n056XxlJ92bc9cDz4eCWl0lDmh1R7ezyZAfsDBQ1BaXZDwcj34nA0B75OUNvwka7MTl+loG7zgi7nKoGx4ZulkjRS7hjagwGrOtudlwz/DE/xQbvuKvmGlMlgeaKUWM0NZdebQMD0244WO9TyQCJDKameYD4HzpNHIx0BMLFX08OTDVQPAsiYXHLmHIpWK9Fi1Iy6PcHKRu6kyVg/6wTDfolvcSD0p65XIENmgC7PBaaXixuQ1+yC9OAnBdtIO0SmeQ1lUhfB73aFN16U0iPVz8q3nBQvNf7ygwFf68PzScHBrZwh10AAAAASUVORK5CYII=">
                    </a>
                </div>

                <div class="border_icone">
                    <a href="https://www.instagram.com/pavesini_official/">
                        <img src="https://img.icons8.com/material-outlined/100/0051a3/instagram-new--v1.png" alt="instagram-new--v1"/>
                    </a>
                </div>

                <div class="border_icone">
                    <a href="https://consent.youtube.com/m?continue=https%3A%2F%2Fwww.youtube.com%2Fchannel%2FUCoTAAq6525AWdY3qHbILoyw%3Fcbrd%3D1&gl=IT&m=0&pc=yt&cm=2&hl=it&src=1">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAACiklEQVR4nO2ZO2gUURSGf19gpyhaiql8NIKFNkIaUSyyc87KtEYUIlaClWAgCkJqsRKRZc4xgisIFlaJpBCE4IOgEZGAiLiFIlGJGF/LyM7uLNHEuRPuTGYC94e/Wtj7f3POnbmcCzg5OTk5OTml1MDVdaBgF1grIDkNlosguQaSO2AZA8tjsE6D9D1YZiKTfANr2DXJbPc3lgZIXoJlAqSjYLkF1isgGYQnx0F6CH6wDZnIq20HyyWwPAPpz79CLZvlC1jGwXoK/bX1S4cgPQHWr8WE18VNOoWK7k4PEbWPNgsPzovByBv417eYIfz6GrC8LTwwJ7bbcIpqyJ7ig6rJr80gnhwtQdDQaL++IRmE9GzhITmFaWSfCeTyygDRfgOI3LVaoBocBOnz4jc860OrBVrqHV8LkgGQfsgR5KaptSatQWL59U3tVpVfObTWqKki05mBxKroDpDeyxhk0gAijcxBYrX3z1RGrdVIBiH5nBtI9xStZ8D6ya4i8gMIVyWAWJ5y0yrePyS/8/ko0jKBULDZGsSrbfz/ArYlT9tati1M2sTQ0OqkirzLdbOzvLD6f44tM8lPjPVV5iDVkZ2Zv37ZdAImfboyPojyxFSRB9Yg3Vdsa8iQMQDHIHrfUBG5bbfAjSPt6UhOABxb1FARGc4/RCa+kAziyckShAxTVOSYobWC3uJDqtkUHEgGaY1ayjoK4hhCm+lGQtEItNRtNWaGiEB074K5bXn8HRXZj9SqBofbA+nCg4fz/DGagi5Z7f1yDqSPQDpXSHjSuc7658GyFdZqnTT7pCca90djfxmMrgFY651rgYnONUFj3rXCbPprBa0vuFbok57kE66Tk5OTk5MT/tUfbtxOGfgC0iYAAAAASUVORK5CYII=">
                    </a>
                </div>

                <div class="border_icone">
                    <a href="https://open.spotify.com/user/314dxbsruiaun4dtinu2tjb7msya">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEkElEQVR4nO1Za4hVVRReklj2wrQH9rbCP0ZBEASVJZENjTNnrTMeKjGm/kQPkkRLDPsTVPYgm16gFDN3rTuGt3+p1FipBYEWlL8q65qWWv0QrQjJHLux1z42zj2Pe865595zCT9YcLmctc/+zvr22mvtDXAS/1fMGz4XSOYDygAQjwDyHiA5BCQ13w7pfyib/Gc88N4+DzoCXmUyoPQD8mZAOXbCpJOZ8TG+Dt+nY7Ud81afDg4/AcS/pp58pJmxeJmO3RaQ9ALJ7vwIBGy3vqNl6B88zWq7ZQTqZcdwO5+RLwmS6YCyo20k6D8yO6B37YX5kHCHrwCSH9pOgk6QWg9f1WQk+HxA/q5AEjVr/BM471zSTGr9sngScpzMV9lSNPGa4icv9WTWpCQh3cVPWsLN4Z4UkuJdhU+YIgzlx2RpmXhp4ZOlhmQeT7Dp8c8NvwjKRkBZCSQPa6hJrtM03bP2AugePgegNgFu2TJRf5NcDDh0JThyMxDfD8jPAPE6m0j4aEYiv8QvfJSF0QPw+vw2Jx9GIo7cBiTPA8nOlGT644hsinT0hi6CVoP4WkB+A4h/b0yGPwofxMgAeTTSMfOGlAG9b50FyCvq+pn6iBwDrzI16OwwxoeSN0APz7C7fekmwNKDgLwKkN8Fks9sptNS/CAQ/2P1zwcBeS8Qf6vNFsmb4JaX+BX09IaEus3HlY3RH5f7gk7ILxWQgaoqJZS5mhzC4JUujfm4q4IOcczbYrwfkJ/WzJeYiHwQQqQTikMx9ieQPKvp3BjKhzER2RUkQnIgxcv+AORP/DXykJY0fUOzwBm8XHXtVSaBVznF7iO6pmaqfIgfAeRXbY/Ph5smjfxbWESOJJTAc5F6ToOugVPtHmKKU5MgMhEZ1c23LiJ/JXLukrMhb5gDB5MFSap5EEkmLbd05zg/k5Ld8hw90jGnICZiRj4kq4H4FS1lkJdrqiS+WiMRBa8yCYgXq2QySytpiWC1/R6QbE38wnH+8re/gB8Ft3xZKCFHbk04XjXobDa8ZhdfJp3Lx4Eoe5WpCX3fDyEiLxZCZMy2glueDViaZmWZiMjLIURKToaXmzS8wa+L5kPf0DW6gTmDU3RMk361rJEbAPkBfxf/wpYwuZCnEF0OToktGgNfg5dnTsOmACV5DEi2ZZckj9reJwxGc0kH8ipnQh5wyzcC8afpyfBI3KALUgz2pDZGJNdrRYtSVtmYalezmcrngJY+ZkGbNeiW79LrhwBqEzTClCYisjCaiMnxKPtau6i1vB8Bt3TvOGmaHoQSj7Ff2/JYWO3W2mQ7VQW2t38qBZHFjTVroqKNUNvIpLVq42gch1u6owMmXIuIRlcyEmMSe634Sct4Q3k9HYkxiW3vHBL8eWzB2fimtiPWSzXQAqeGqVCLbYO/1zInF5h2tRCZ8XZ9d66wm+VAjgVfgzUh3Nq7d3OI0EqpoZY0c6EtsBltkT1FzI2AOZFclD0zNQPbY99tD/eyXBHwUf+K4p5iCITBnK7oXQm/4Pf0X/vV7xH/qMn8/kavJ8wz5tlWnMicBHQG/gXglDkZYvbo/QAAAABJRU5ErkJggg==">
                    </a>
                </div>  

                <div class="border_icone">
                    <a href="login.php">
                        <img src="omino.png">
                    </a>
                </div>  

            </div>

                <div id="menu">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </nav>

            <div id="showmenu" class="hidden">
                <a href="homepage.php">home</a>
                <div id="linea_menu">
                    <div></div>
                    <a>prodotti</a>
                    <a href="https://www.pavesini.it/pavesini/snack/">snack</a>
                    <a href="https://www.pavesini.it/pavesini/gelati/">gelati</a>
                </div>
                <div id="linea_menu2">
                    <div></div>
                    <a href="">concorsi</a>
                    <a href="https://www.pavesini.it/concorsi/vinci-e-parti-2024/">vinci e parti</a>
                </div>
                <a href="https://www.pavesini.it/ricette/">ricette</a>
            </div>
    

        </header>
        

        <section id="centrale">
        <section id="main-shop">
             <h1>Prodotti Pavesi</h1>
            <section class="shop">
            </section>
        </section>
        </section>


        <section id="modal-view" class="hidden">
            </section>
       
            <!--FOOTER-->
            <footer>
                <img src="	https://www.pavesini.it/wp-content/themes/pavesini-new/images/logo-pavesini-footer.png" >

                <div>
                    <a href="https://www.pavesini.it/dati-societari/">Dati Societari
                    <a href="https://www.pavesini.it/privacy/">Privacy policy</a>
                    <a href="https://www.pavesini.it/cookies/">Cookie policy</a>
                    <a href=""> Gestisci</a>
                    <a href="https://www.pavesini.it/contatti/">Contatti</a>
                    <a href="https://www.barillagroup.com/it/di-piu-su-di-noi/barilla-gdpr-policy/">Barilla - GDPR </a>
                    <a href="https://www.pavesini.it/wp-content/uploads/2023/05/DDA-PAVESINI.pdf"> Dichiarazione di accessibilità</a>
                </div> 

                <div id="allinea">
                    <p>
                        <div class="scopri-ricette-font"><strong>Scopri le nostre ricette:</strong> </div> 
                        <div>
                            <a class="sottolinea" href="https://www.pavesini.it/ricette/tiramisu-al-limone/">Tiramisù al limone</a>
                            <a class="sottolinea" href="https://www.pavesini.it/ricette/mattonella-dolce/"> Mattonella dolce</a>
                            <a class="sottolinea" href="https://www.pavesini.it/ricette/zuccotto-semifreddo/">Zuccotto semifreddo</a><br>
                            <a class="sottolinea" href="https://www.pavesini.it/ricette/tiramisu-alle-fragole-con-pavesini/">Tiramisù alle fragole con Pavesini</a>
                        </div>
                    </p>
                </div>
                
                <div id="barilla">
                    <strong> © 2024 Barilla - P. IVA 01654010345</strong>
                </div>
            </footer>

        </section>
            <div id="icone">
            
                    <div class="border_icon">
                        <a href="https://www.facebook.com/pavesiniofficial">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAABqUlEQVR4nO2VO07DQBCGBwooKCgQQjxFyQGoqUACicSzQT4ED4cj5AzpQBDAMyFIaREPcQuqBHEEqiQ0KEFBa/NIhL0ZOw6iyC9NY3n9+Z+ZnQEY6t/JdpdAsQPI96CoCopf/aCq9wzpAKyrxQSBF/Og+BiQWqC4bQzkd1BcBut8uT+oRQhIjZ7A31EHxel4UOTDTwdRoR3uKRvDKceHdqde6Fzxgiy9dA2Z4hqgOwWb+XFIlWYAqRKY9nRpTgCmgsDJA+RyowHleQx+n056XxlJ92bc9cDz4eCWl0lDmh1R7ezyZAfsDBQ1BaXZDwcj34nA0B75OUNvwka7MTl+loG7zgi7nKoGx4ZulkjRS7hjagwGrOtudlwz/DE/xQbvuKvmGlMlgeaKUWM0NZdebQMD0244WO9TyQCJDKameYD4HzpNHIx0BMLFX08OTDVQPAsiYXHLmHIpWK9Fi1Iy6PcHKRu6kyVg/6wTDfolvcSD0p65XIENmgC7PBaaXixuQ1+yC9OAnBdtIO0SmeQ1lUhfB73aFN16U0iPVz8q3nBQvNf7ygwFf68PzScHBrZwh10AAAAASUVORK5CYII=">
                        </a>
                    </div>

                    <div class="border_icon">
                        <a href="https://www.instagram.com/pavesini_official/">
                            <img src="https://img.icons8.com/material-outlined/100/0051a3/instagram-new--v1.png" alt="instagram-new--v1"/>
                        </a>
                    </div>

                    <div class="border_icon">
                        <a href="https://consent.youtube.com/m?continue=https%3A%2F%2Fwww.youtube.com%2Fchannel%2FUCoTAAq6525AWdY3qHbILoyw%3Fcbrd%3D1&gl=IT&m=0&pc=yt&cm=2&hl=it&src=1">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAACiklEQVR4nO2ZO2gUURSGf19gpyhaiql8NIKFNkIaUSyyc87KtEYUIlaClWAgCkJqsRKRZc4xgisIFlaJpBCE4IOgEZGAiLiFIlGJGF/LyM7uLNHEuRPuTGYC94e/Wtj7f3POnbmcCzg5OTk5OTml1MDVdaBgF1grIDkNlosguQaSO2AZA8tjsE6D9D1YZiKTfANr2DXJbPc3lgZIXoJlAqSjYLkF1isgGYQnx0F6CH6wDZnIq20HyyWwPAPpz79CLZvlC1jGwXoK/bX1S4cgPQHWr8WE18VNOoWK7k4PEbWPNgsPzovByBv417eYIfz6GrC8LTwwJ7bbcIpqyJ7ig6rJr80gnhwtQdDQaL++IRmE9GzhITmFaWSfCeTyygDRfgOI3LVaoBocBOnz4jc860OrBVrqHV8LkgGQfsgR5KaptSatQWL59U3tVpVfObTWqKki05mBxKroDpDeyxhk0gAijcxBYrX3z1RGrdVIBiH5nBtI9xStZ8D6ya4i8gMIVyWAWJ5y0yrePyS/8/ko0jKBULDZGsSrbfz/ArYlT9tati1M2sTQ0OqkirzLdbOzvLD6f44tM8lPjPVV5iDVkZ2Zv37ZdAImfboyPojyxFSRB9Yg3Vdsa8iQMQDHIHrfUBG5bbfAjSPt6UhOABxb1FARGc4/RCa+kAziyckShAxTVOSYobWC3uJDqtkUHEgGaY1ayjoK4hhCm+lGQtEItNRtNWaGiEB074K5bXn8HRXZj9SqBofbA+nCg4fz/DGagi5Z7f1yDqSPQDpXSHjSuc7658GyFdZqnTT7pCca90djfxmMrgFY651rgYnONUFj3rXCbPprBa0vuFbok57kE66Tk5OTk5MT/tUfbtxOGfgC0iYAAAAASUVORK5CYII="> 
                    </div>

                    <div class="border_icon">
                        <a href="https://open.spotify.com/user/314dxbsruiaun4dtinu2tjb7msya">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEkElEQVR4nO1Za4hVVRReklj2wrQH9rbCP0ZBEASVJZENjTNnrTMeKjGm/kQPkkRLDPsTVPYgm16gFDN3rTuGt3+p1FipBYEWlL8q65qWWv0QrQjJHLux1z42zj2Pe865595zCT9YcLmctc/+zvr22mvtDXAS/1fMGz4XSOYDygAQjwDyHiA5BCQ13w7pfyib/Gc88N4+DzoCXmUyoPQD8mZAOXbCpJOZ8TG+Dt+nY7Ud81afDg4/AcS/pp58pJmxeJmO3RaQ9ALJ7vwIBGy3vqNl6B88zWq7ZQTqZcdwO5+RLwmS6YCyo20k6D8yO6B37YX5kHCHrwCSH9pOgk6QWg9f1WQk+HxA/q5AEjVr/BM471zSTGr9sngScpzMV9lSNPGa4icv9WTWpCQh3cVPWsLN4Z4UkuJdhU+YIgzlx2RpmXhp4ZOlhmQeT7Dp8c8NvwjKRkBZCSQPa6hJrtM03bP2AugePgegNgFu2TJRf5NcDDh0JThyMxDfD8jPAPE6m0j4aEYiv8QvfJSF0QPw+vw2Jx9GIo7cBiTPA8nOlGT644hsinT0hi6CVoP4WkB+A4h/b0yGPwofxMgAeTTSMfOGlAG9b50FyCvq+pn6iBwDrzI16OwwxoeSN0APz7C7fekmwNKDgLwKkN8Fks9sptNS/CAQ/2P1zwcBeS8Qf6vNFsmb4JaX+BX09IaEus3HlY3RH5f7gk7ILxWQgaoqJZS5mhzC4JUujfm4q4IOcczbYrwfkJ/WzJeYiHwQQqQTikMx9ieQPKvp3BjKhzER2RUkQnIgxcv+AORP/DXykJY0fUOzwBm8XHXtVSaBVznF7iO6pmaqfIgfAeRXbY/Ph5smjfxbWESOJJTAc5F6ToOugVPtHmKKU5MgMhEZ1c23LiJ/JXLukrMhb5gDB5MFSap5EEkmLbd05zg/k5Ld8hw90jGnICZiRj4kq4H4FS1lkJdrqiS+WiMRBa8yCYgXq2QySytpiWC1/R6QbE38wnH+8re/gB8Ft3xZKCFHbk04XjXobDa8ZhdfJp3Lx4Eoe5WpCX3fDyEiLxZCZMy2glueDViaZmWZiMjLIURKToaXmzS8wa+L5kPf0DW6gTmDU3RMk361rJEbAPkBfxf/wpYwuZCnEF0OToktGgNfg5dnTsOmACV5DEi2ZZckj9reJwxGc0kH8ipnQh5wyzcC8afpyfBI3KALUgz2pDZGJNdrRYtSVtmYalezmcrngJY+ZkGbNeiW79LrhwBqEzTClCYisjCaiMnxKPtau6i1vB8Bt3TvOGmaHoQSj7Ff2/JYWO3W2mQ7VQW2t38qBZHFjTVroqKNUNvIpLVq42gch1u6owMmXIuIRlcyEmMSe634Sct4Q3k9HYkxiW3vHBL8eWzB2fimtiPWSzXQAqeGqVCLbYO/1zInF5h2tRCZ8XZ9d66wm+VAjgVfgzUh3Nq7d3OI0EqpoZY0c6EtsBltkT1FzI2AOZFclD0zNQPbY99tD/eyXBHwUf+K4p5iCITBnK7oXQm/4Pf0X/vV7xH/qMn8/kavJ8wz5tlWnMicBHQG/gXglDkZYvbo/QAAAABJRU5ErkJggg==">
                        </a>
                    </div>

            </div>

    </section>
      </body>
</html>