<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NoLimitGym</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr@latest/dist/flatpickr.min.css">
        <script src="https://cdn.jsdelivr.net/npm/flatpickr@latest"></script>
    </head>
    <body>
        <nav class="navbar">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="index.html"><img src="Assets/Logo.png" alt="Logo"></a>
                    <div class="nav-menu">
                        <a href="#hero" class="nav-link">Početna</a>
                        <a href="#rezultati" class="nav-link">Rezultati</a>
                        <a href="#zakazivanje" class="nav-link">Rezervišite termin</a>
                    </div>
                </div>
            </div>
        </nav>
        <section class="Hero" id="hero">
            <h1 class="hero-naslov">ZVANIČNI<br>HAMMER STRENGTH<br>TRENING CENTAR</h1>
            <a href="#zakazivanje"><button class="main-cta">Rezervišite svoj termin</button></a>
        </section>
        <section class="all-sections brojevi" id="rezultati">
            <div class="container">
                <div class="sekcija-wrapper">
                    <h2 class="section-headings brojevi-naslov">NoLimitGym u brojevima</h2>
                    <div class="brojevi-wrapper">
                        <div class="rezultat">
                            <img class="ikonica" src="Assets/prostor.svg" alt="prostor">
                            <div class="broj-wrapper">
                                <h4 class="broj">1500</h4>
                                <h4 class="jedinica">m2</h4>
                            </div>
                            <p class="naziv-brojke">Prostora</p>
                        </div>
                        <div class="rezultat">
                            <img class="ikonica" src="Assets/sprava.svg" alt="sprava">
                            <div class="broj-wrapper">
                                <h4 class="broj">150</h4>
                            </div>
                            <p class="naziv-brojke">Sprava za vežbanje</p>
                        </div>
                        <div class="rezultat">
                            <img class="ikonica" src="Assets/svlacionica.svg" alt="svlacionica">
                            <div class="broj-wrapper">
                                <h4 class="broj">250</h4>
                                <h4 class="jedinica">m2</h4>
                            </div>
                            <p class="naziv-brojke">Svlačionica</p>
                        </div>
                        <div class="rezultat">
                            <img class="ikonica" src="Assets/kalendar.svg" alt="kalendar">
                            <div class="broj-wrapper">
                                <h4 class="broj">7</h4>
                            </div>
                            <p class="naziv-brojke">Dana u nedelji</p>
                        </div>
                        <div class="rezultat">
                            <img class="ikonica" src="Assets/sale.svg" alt="sale">
                            <div class="broj-wrapper">
                                <h4 class="broj">4</h4>
                            </div>
                            <p class="naziv-brojke">Trening sale</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="all-sections vezbe">
            <div class="container">
                <div class="sekcija-wrapper" >
                    <h2 class="section-headings vezbe-naslov">Vežbe kod nas</h2>
                    <div class="vezbe-wrapper">
                        <div class="vezba">
                            <img src="Assets/biceps.png" alt="Ruke">
                            <h4 class="vezba-naziv">Ruke</h4>
                            <p class="cena">Cena: 500rsd</p>
                        </div>
                        <div class="vezba">
                            <img src="Assets/noge.png" alt="Noge">
                            <h4 class="vezba-naziv">Noge</h4>
                            <p class="cena">Cena: 750rsd</p>
                        </div>
                        <div class="vezba">
                            <img src="Assets/crni kardio.png" alt="Kardio">
                            <h4 class="vezba-naziv">Kardio</h4>
                            <p class="cena">Cena: 400rsd</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="all-sections zakazivanje" id="zakazivanje">
            <div class="container">
                <h2 class="section-headings zakazivanje-naslov" id="zakazivanje-naslov">Zakažite svoj termin</h2>
                <p class="popunite" id="popunite">Popunite formu sa vašim podacima i zahtevima:</p>
                <form class="Form" id="gym-form" method="POST">
                    <div class="form-group">
                        <label for="Ime" class="form-label">Ime</label>
                        <span id="ime-error" class="error-message" style="display: none;" >Molimo vas unesite vaše ime!</span>
                        <input class="input-field" type="text" name="Ime" id="Ime" placeholder="Petar" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="Prezime" class="form-label">Prezime</label>
                        <span id="prezime-error" class="error-message" style="display: none;" >Molimo vas unesite vaše prezime!</span>
                        <input class="input-field" type="text" name="Prezime" id="Prezime" placeholder="Petrović" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="broj-telefona" class="form-label">Broj telefona</label>
                        <span id="broj-error" class="error-message" style="display: none;" >Molimo vas unesite broj telefona!</span>
                        <input class="input-field" type="number" name="broj-telefona" id="broj-telefona" placeholder="012 345678" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="Tip" class="form-label">Tip vežbe</label>
                        <span id="tip-error" class="error-message" style="display: none;" >Molimo vas izaberite tip vežbe!</span>
                        <div class="dropdown">
                            <select class="input-field dropdown-menu" id="Tip" name="Tip" autocomplete="off" style = "width:583px">
                                <option value="" disabled selected style="background-color:rgb(67,12,28)">Izaberite tip vežbe</option>
                                <option class="vezba-select" value="Ruke" style="background-color:rgb(67,12,28)">Ruke</option>
                                <option class="vezba-select" value="Noge" style="background-color:rgb(67,12,28)">Noge</option>
                                <option class="vezba-select" value="Kardio" style="background-color:rgb(67,12,28)">Kardio</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Dan" class="form-label">Dan</label>
                        <span id="date-error" class="error-message" style="display: none;" >Molimo vas izaberite datum!</span>
                        <input class="input-field" type="date" name="Dan" id="Dan" placeholder="dd/mm/yyyy  " autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="Vreme" class="form-label">Vreme</label>
                        <span id="vreme-error" class="error-message" style="display: none;" >Molimo vas izaberite vreme!</span>
                        <select class="input-field" id="Vreme" name="Vreme" style = "width:583px">
                            <option value="" disabled selected style="background-color:rgb(67,12,28)">Izaberi vreme</option>
                            <option style="background-color:rgb(67,12,28)" value="07:00">07:00</option>
                            <option style="background-color:rgb(67,12,28)" value="07:30">07:30</option>
                            <option style="background-color:rgb(67,12,28)" value="08:00">08:00</option>
                            <option style="background-color:rgb(67,12,28)" value="08:30">08:30</option>
                            <option style="background-color:rgb(67,12,28)" value="09:00">09:00</option>
                            <option style="background-color:rgb(67,12,28)" value="09:30">09:30</option>
                            <option style="background-color:rgb(67,12,28)" value="10:00">10:00</option>
                            <option style="background-color:rgb(67,12,28)" value="10:30">10:30</option>
                            <option style="background-color:rgb(67,12,28)" value="11:00">11:00</option>
                            <option style="background-color:rgb(67,12,28)" value="11:30">11:30</option>
                            <option style="background-color:rgb(67,12,28)" value="12:00">12:00</option>
                            <option style="background-color:rgb(67,12,28)" value="12:30">12:30</option>
                            <option style="background-color:rgb(67,12,28)" value="13:00">13:00</option>
                            <option style="background-color:rgb(67,12,28)" value="13:30">13:30</option>
                            <option style="background-color:rgb(67,12,28)" value="14:00">14:00</option>
                            <option style="background-color:rgb(67,12,28)" value="14:30">14:30</option>
                            <option style="background-color:rgb(67,12,28)" value="15:00">15:00</option>
                            <option style="background-color:rgb(67,12,28)" value="15:30">15:30</option>
                            <option style="background-color:rgb(67,12,28)" value="16:00">16:00</option>
                            <option style="background-color:rgb(67,12,28)" value="16:30">16:30</option>
                            <option style="background-color:rgb(67,12,28)" value="17:00">17:00</option>
                            <option style="background-color:rgb(67,12,28)" value="17:30">17:30</option>
                            <option style="background-color:rgb(67,12,28)" value="18:00">18:00</option>
                            <option style="background-color:rgb(67,12,28)" value="18:30">18:30</option>
                            <option style="background-color:rgb(67,12,28)" value="19:00">19:00</option>
                            <option style="background-color:rgb(67,12,28)" value="19:30">19:30</option>
                            <option style="background-color:rgb(67,12,28)" value="20:00">20:00</option>
                            <option style="background-color:rgb(67,12,28)" value="20:30">20:30</option>
                            <option style="background-color:rgb(67,12,28)" value="21:00">21:00</option>
                            <option style="background-color:rgb(67,12,28)" value="21:30">21:30</option>
                        </select>
                    </div>
                    <button class="Submit" type="submit">Zakaži</button>
                </form>
                <div class="success-message" id="success-message" style="display: none;">
                    <p>Uspešno ste zakazali termin za vežbu!</p>
                </div>
            </div>
        </section>
        <section class="Footer">
            <div class="container">
                <p>Copyright © 2024 NoLimitGYM</p>
            </div>
        </section>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="script.js"></script>
    </body>
</html>