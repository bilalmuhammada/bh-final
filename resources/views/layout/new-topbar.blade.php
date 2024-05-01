<header>
    <div class="container">
        <!-- topbar start -->
        <div class="topbar desktop-view">
            <div class="cont-w">
                <div class="row">
                    <div class="col-lg-2 col-xl-2 col-md-2">
                        <!-- social icon desktop start -->
                        <a class="navbar-brand" href="{{env('BASE_URL') . 'home'}}">
                            <img class="image-fluid" src="{{asset('images/businesshub.png')}}" alt="businesshub"
                                 title="businesshub">
                        </a>
                    </div>
                    <div class="col-lg-2 col-xl-2 col-md-2">
                        <span class="lang">
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option value="Afrikaans">location</option>
                                <option value="Afrikaans">af</option>
                                <option value="Albanian">sq</option>
                                <option value="Amharic">am</option>
                                <option value="Arabic">ar</option>
                                <option value="Armenian">hy</option>
                                <option value="Assamese">as</option>
                                <option value="Aymara">ay</option>
                                <option value="Azerbaijani">az</option>
                                <option value="Bambara">bm</option>
                                <option value="Basque">eu</option>
                                <option value="Belarusian">be</option>
                                <option value="Bengali">bn</option>
                                <option value="Bhojpuri">bho</option>
                                <option value="Bosnian">bs</option>
                                <option value="Bulgarian">bg</option>
                                <option value="Burmese">my</option>
                                <option value="Catalan">ca</option>
                                <option value="Cebuano">ceb</option>
                                <option value="Chichewa">ny</option>
                                <option value="Chinese (Simplified)">zh-CN</option>
                                <option value="Chinese (Traditional)">zh-TW</option>
                                <option value="Corsican">co</option>
                                <option value="Croatian">hr</option>
                                <option value="Czech">cs</option>
                                <option value="Danish">da</option>
                                <option value="Dhivehi">dv</option>
                                <option value="Dogri">doi</option>
                                <option value="Dutch">nl</option>
                                <option value="Esperanto">eo</option>
                                <option value="Estonian">et</option>
                                <option value="Ewe">ee</option>
                                <option value="Filipino">tl</option>
                                <option value="Finnish">fi</option>
                                <option value="French">fr</option>
                                <option value="Frisian">fy</option>
                                <option value="Galician">gl</option>
                                <option value="Georgian">ka</option>
                                <option value="German">de</option>
                                <option value="Greek">el</option>
                                <option value="Guarani">gn</option>
                                <option value="Gujarati">gu</option>
                                <option value="Haitian Creole">ht</option>
                                <option value="Hausa">ha</option>
                                <option value="Hawaiian">haw</option>
                                <option value="Hebrew">iw</option>
                                <option value="Hindi">hi</option>
                                <option value="Hmong">hmn</option>
                                <option value="Hungarian">hu</option>
                                <option value="Icelandic">is</option>
                                <option value="Igbo">ig</option>
                                <option value="Ilocano">ilo</option>
                                <option value="Indonesian">id</option>
                                <option value="Irish Gaelic">ga</option>
                                <option value="Italian">it</option>
                                <option value="Japanese">ja</option>
                                <option value="Javanese">jw</option>
                                <option value="Kannada">kn</option>
                                <option value="Kazakh">kk</option>
                                <option value="Khmer">km</option>
                                <option value="Kinyarwanda">rw</option>
                                <option value="Konkani">gom</option>
                                <option value="Korean">ko</option>
                                <option value="Krio">kri</option>
                                <option value="Kurdish (Kurmanji)">ku</option>
                                <option value="Kurdish (Sorani)">ckb</option>
                                <option value="Kyrgyz">ky</option>
                                <option value="Lao">lo</option>
                                <option value="Latin">la</option>
                                <option value="Latvian">lv</option>
                                <option value="Lingala">ln</option>
                                <option value="Lithuanian">lt</option>
                                <option value="Luganda">lg</option>
                                <option value="Luxembourgish">lb</option>
                                <option value="Macedonian">mk</option>
                                <option value="Maithili">mai</option>
                                <option value="Malagasy">mg</option>
                                <option value="Malay">ms</option>
                                <option value="Malayalam">ml</option>
                                <option value="Maltese">mt</option>
                                <option value="Maori">mi</option>
                                <option value="Marathi">mr</option>
                                <option value="Meiteilon (Manipuri)">mni-Mtei</option>
                                <option value="Mizo">lus</option>
                                <option value="Mongolian">mn</option>
                                <option value="Nepali">ne</option>
                                <option value="Norwegian">no</option>
                                <option value="Odia (Oriya)">or</option>
                                <option value="Oromo">om</option>
                                <option value="Pashto">ps</option>
                                <option value="Persian">fa</option>
                                <option value="Polish">pl</option>
                                <option value="Portuguese">pt</option>
                                <option value="Punjabi">pa</option>
                                <option value="Quechua">qu</option>
                                <option value="Romanian">ro</option>
                                <option value="Russian">ru</option>
                                <option value="Samoan">sm</option>
                                <option value="Sanskrit">sa</option>
                                <option value="Scots Gaelic">gd</option>
                                <option value="Sepedi">nso</option>
                                <option value="Serbian">sr</option>
                                <option value="Sesotho">st</option>
                                <option value="Shona">sn</option>
                                <option value="Sindhi">sd</option>
                                <option value="Sinhala">si</option>
                                <option value="Slovak">sk</option>
                                <option value="Slovenian">sl</option>
                                <option value="Somali">so</option>
                                <option value="Spanish">es</option>
                                <option value="Sundanese">su</option>
                                <option value="Swahili">sw</option>
                                <option value="Swedish">sv</option>
                                <option value="Tajik">tg</option>
                                <option value="Tamil">ta</option>
                                <option value="Tatar">tt</option>
                                <option value="Telugu">te</option>
                                <option value="Thai">th</option>
                                <option value="Tigrinya">ti</option>
                                <option value="Tsonga">ts</option>
                                <option value="Turkish">tr</option>
                                <option value="Turkmen">tk</option>
                                <option value="Twi">ak</option>
                                <option value="Ukrainian">uk</option>
                                <option value="Urdu">ur</option>
                                <option value="Uyghur">ug</option>
                                <option value="Uzbek">uz</option>
                                <option value="Vietnamese">vi</option>
                                <option value="Welsh">cy</option>
                                <option value="Xhosa">xh</option>
                                <option value="Yiddish">yi</option>
                                <option value="Yoruba">yo</option>
                                <option value="Zulu">zu</option>
                            </select>
                        </span>
                        <span class="lang">
                            <select class="form-select form-select-sm change-lang" aria-label=".form-select-sm example">
                                <option value="langauges">langauge</option>
                                <option value="af">af</option>
                                <option value="sq">sq</option>
                                <option value="am">am</option>
                                <option value="ar">ar</option>
                                <option value="hy">hy</option>
                                <option value="as">as</option>
                                <option value="ay">ay</option>
                                <option value="az">az</option>
                                <option value="bm">bm</option>
                                <option value="eu">eu</option>
                                <option value="be">be</option>
                                <option value="bn">bn</option>
                                <option value="bho">bho</option>
                                <option value="bs">bs</option>
                                <option value="bg">bg</option>
                                <option value="my">my</option>
                                <option value="ca">ca</option>
                                <option value="ceb">ceb</option>
                                <option value="ny">ny</option>
    {{--                            <option value=SimplifiedChinese (Simplified)">zh-CN</option>--}}
                                {{--                            <option value=TraditionalChinese (Traditional)">zh-TW</option>--}}
                                <option value="co">co</option>
                                <option value="hr">hr</option>
                                <option value="cs">cs</option>
                                <option value="da">da</option>
                                <option value="dv">dv</option>
                                <option value="doi">doi</option>
                                <option value="nl">nl</option>
                                <option value="eo">eo</option>
                                <option value="et">et</option>
                                <option value="ee">ee</option>
                                <option value="tl">tl</option>
                                <option value="fi">fi</option>
                                <option value="fr">fr</option>
                                <option value="fy">fy</option>
                                <option value="gl">gl</option>
                                <option value="ka">ka</option>
                                <option value="de">de</option>
                                <option value="el">el</option>
                                <option value="gn">gn</option>
                                <option value="gu">gu</option>
    {{--                            <option value="Haitian Creole">ht</option>--}}
                                <option value="ha">ha</option>
                                <option value="haw">haw</option>
                                <option value="iw">iw</option>
                                <option value="hi">hi</option>
                                <option value="hmn">hmn</option>
                                <option value="hu">hu</option>
                                <option value="is">is</option>
                                <option value="ig">ig</option>
                                <option value="ilo">ilo</option>
                                <option value="id">id</option>
                                <option value="Irish Gaelic">ga</option>
                                <option value="it">it</option>
                                <option value="ja">ja</option>
                                <option value="jw">jw</option>
                                <option value="kn">kn</option>
                                <option value="kk">kk</option>
                                <option value="km">km</option>
                                <option value="rw">rw</option>
                                <option value="gom">gom</option>
                                <option value="ko">ko</option>
                                <option value="kri">kri</option>
    {{--                            <option value=KurmanjiKurdish (Kurmanji)">ku</option>--}}
                                {{--                            <option value=SoraniKurdish (Sorani)">ckb</option>--}}
                                <option value="ky">ky</option>
                                <option value="lo">lo</option>
                                <option value="la">la</option>
                                <option value="lv">lv</option>
                                <option value="ln">ln</option>
                                <option value="lt">lt</option>
                                <option value="lg">lg</option>
                                <option value="lb">lb</option>
                                <option value="mk">mk</option>
                                <option value="mai">mai</option>
                                <option value="mg">mg</option>
                                <option value="ms">ms</option>
                                <option value="ml">ml</option>
                                <option value="mt">mt</option>
                                <option value="mi">mi</option>
                                <option value="mr">mr</option>
    {{--                            <option value=ManipuriMeiteilon (Manipuri)">mni-Mtei</option>--}}
                                <option value="lus">lus</option>
                                <option value="mn">mn</option>
                                <option value="ne">ne</option>
                                <option value="no">no</option>
    {{--                            <option value=OriyaOdia (Oriya)">or</option>--}}
                                <option value="om">om</option>
                                <option value="ps">ps</option>
                                <option value="fa">fa</option>
                                <option value="pl">pl</option>
                                <option value="pt">pt</option>
                                <option value="pa">pa</option>
                                <option value="qu">qu</option>
                                <option value="ro">ro</option>
                                <option value="ru">ru</option>
                                <option value="sm">sm</option>
                                <option value="sa">sa</option>
    {{--                            <option value="Scots Gaelic">gd</option>--}}
                                <option value="nso">nso</option>
                                <option value="sr">sr</option>
                                <option value="st">st</option>
                                <option value="sn">sn</option>
                                <option value="sd">sd</option>
                                <option value="si">si</option>
                                <option value="sk">sk</option>
                                <option value="sl">sl</option>
                                <option value="so">so</option>
                                <option value="es">es</option>
                                <option value="su">su</option>
                                <option value="sw">sw</option>
                                <option value="sv">sv</option>
                                <option value="tg">tg</option>
                                <option value="ta">ta</option>
                                <option value="tt">tt</option>
                                <option value="te">te</option>
                                <option value="th">th</option>
                                <option value="ti">ti</option>
                                <option value="ts">ts</option>
                                <option value="tr">tr</option>
                                <option value="tk">tk</option>
                                <option value="ak">ak</option>
                                <option value="uk">uk</option>
                                <option value="ur">ur</option>
                                <option value="ug">ug</option>
                                <option value="uz">uz</option>
                                <option value="vi">vi</option>
                                <option value="cy">cy</option>
                                <option value="xh">xh</option>
                                <option value="yi">yi</option>
                                <option value="yo">yo</option>
                                <option value="zu">zu</option>
                            </select>
                        </span>
                        <!-- social icon desktop finish -->
                    </div>
                    <div class="col-lg-4 col-xl-4 col-md-5" style="border:0px solid rgb(170, 255, 0);">
                        <div class="social-icon float-right text-dark">
                            <ul style="font-size: 12px;color:black;">
                                <a style="color:#000;">
                                    <li style="text-align: center;">
                                        <i class="fa fa-bell" width="15"></i>
                                        <br>
                                        <span>Notifications</span>
                                    </li>
                                </a>
                                <a>
                                    <li style="text-align: center;">
                                        <i class="fa fa-search" width="15"></i>
                                        <br>
                                        <span>My Searches</span>
                                    </li>
                                </a>
                                <a>
                                    <li style="text-align: center;">
                                        <i class="fa fa-heart" width="15"></i>
                                        <br>
                                        <span>Favorites</span>
                                    </li>
                                </a>
                                <a>
                                    <li style="text-align: center;">
                                        <i class="fa fa-comments" width="15"></i>
                                        <br>
                                        <span>Chats</span>
                                    </li>
                                </a>
                                <a>
                                    <li style="text-align: center;">
                                        <i class="fa fa-user" width="15"></i>
                                        <br>
                                        <span>My Ads</span>
                                    </li>
                                </a>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-4 col-md-5" style="border: 0px solid red;">
                        <div class="row pt-3" style="border: 0px solid red;color:#000;">
                            <div class="col-md-12" style="border: 0px solid red;">
                                @if (session()->has('user'))
                                    <a href="{{ env('BASE_URL') . 'user-profile'}}">
                                        <img src="{{session()->get('user')->image_url}}" alt="img" width="30" height="30" style="border-radius: 50%;border:0px solid red;">
                                    </a>
                                    <span class="dropdown">
                                        <span style="width:;display:inline;border:0px solid red;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{session()->get('user')->name}}
                                        </span>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="{{ env('BASE_URL') . 'user-profile'}}">My Profile</a>
                                            <a class="dropdown-item" href="#">My Ads</a>
                                            <a class="dropdown-item" href="#">My Searches</a>
                                            <a class="dropdown-item" href="{{ env('BASE_URL') . 'change-password'}}">Change Password</a>
                                            <a class="dropdown-item" href="#">Account Settings</a>
                                            <a class="dropdown-item logout-btn" href="#">Sign out</a>
                                        </div>
                                    </span>
                                @endif
                                <div style="float:right;">
                                    @if (!session()->has('user'))
                                        <a class="login-btn" style="display: ;padding: 10px;">Login</a>
                                        <a class="register-btn" style="padding: 10px;">Register</a>
                                    @endif
                                    <a class="add-list-button add-listing-btn" style="padding: 10px;">+ Place Your Ad</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- topbar finish -->
        <!-- navigation start -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <!-- navigation toggle start -->
            <a class="navbar-brand mobile-view" href="{{ asset('/')}}">
                <img src="{{asset('images/businesshub.png')}}" alt="businesshub" title="businesshub" id="mobile-logo">
            </a>
            <div class="mobile-menu-right">
                <!-- languages bar mobile start -->
                <div class="lang-mobile " style="display:none;">
                    <span class="lang">
                        <select class="form-select form-select-sm change-lang" aria-label=".form-select-sm example">
                            <option value="Afrikaans">af</option>
                            <option value="Albanian">sq</option>
                            <option value="Amharic">am</option>
                            <option value="Arabic">ar</option>
                            <option value="Armenian">hy</option>
                            <option value="Assamese">as</option>
                            <option value="Aymara">ay</option>
                            <option value="Azerbaijani">az</option>
                            <option value="Bambara">bm</option>
                            <option value="Basque">eu</option>
                            <option value="Belarusian">be</option>
                            <option value="Bengali">bn</option>
                            <option value="Bhojpuri">bho</option>
                            <option value="Bosnian">bs</option>
                            <option value="Bulgarian">bg</option>
                            <option value="Burmese">my</option>
                            <option value="Catalan">ca</option>
                            <option value="Cebuano">ceb</option>
                            <option value="Chichewa">ny</option>
                            <option value="Chinese (Simplified)">zh-CN</option>
                            <option value="Chinese (Traditional)">zh-TW</option>
                            <option value="Corsican">co</option>
                            <option value="Croatian">hr</option>
                            <option value="Czech">cs</option>
                            <option value="Danish">da</option>
                            <option value="Dhivehi">dv</option>
                            <option value="Dogri">doi</option>
                            <option value="Dutch">nl</option>
                            <option value="Esperanto">eo</option>
                            <option value="Estonian">et</option>
                            <option value="Ewe">ee</option>
                            <option value="Filipino">tl</option>
                            <option value="Finnish">fi</option>
                            <option value="French">fr</option>
                            <option value="Frisian">fy</option>
                            <option value="Galician">gl</option>
                            <option value="Georgian">ka</option>
                            <option value="German">de</option>
                            <option value="Greek">el</option>
                            <option value="Guarani">gn</option>
                            <option value="Gujarati">gu</option>
                            <option value="Haitian Creole">ht</option>
                            <option value="Hausa">ha</option>
                            <option value="Hawaiian">haw</option>
                            <option value="Hebrew">iw</option>
                            <option value="Hindi">hi</option>
                            <option value="Hmong">hmn</option>
                            <option value="Hungarian">hu</option>
                            <option value="Icelandic">is</option>
                            <option value="Igbo">ig</option>
                            <option value="Ilocano">ilo</option>
                            <option value="Indonesian">id</option>
                            <option value="Irish Gaelic">ga</option>
                            <option value="Italian">it</option>
                            <option value="Japanese">ja</option>
                            <option value="Javanese">jw</option>
                            <option value="Kannada">kn</option>
                            <option value="Kazakh">kk</option>
                            <option value="Khmer">km</option>
                            <option value="Kinyarwanda">rw</option>
                            <option value="Konkani">gom</option>
                            <option value="Korean">ko</option>
                            <option value="Krio">kri</option>
                            <option value="Kurdish (Kurmanji)">ku</option>
                            <option value="Kurdish (Sorani)">ckb</option>
                            <option value="Kyrgyz">ky</option>
                            <option value="Lao">lo</option>
                            <option value="Latin">la</option>
                            <option value="Latvian">lv</option>
                            <option value="Lingala">ln</option>
                            <option value="Lithuanian">lt</option>
                            <option value="Luganda">lg</option>
                            <option value="Luxembourgish">lb</option>
                            <option value="Macedonian">mk</option>
                            <option value="Maithili">mai</option>
                            <option value="Malagasy">mg</option>
                            <option value="Malay">ms</option>
                            <option value="Malayalam">ml</option>
                            <option value="Maltese">mt</option>
                            <option value="Maori">mi</option>
                            <option value="Marathi">mr</option>
                            <option value="Meiteilon (Manipuri)">mni-Mtei</option>
                            <option value="Mizo">lus</option>
                            <option value="Mongolian">mn</option>
                            <option value="Nepali">ne</option>
                            <option value="Norwegian">no</option>
                            <option value="Odia (Oriya)">or</option>
                            <option value="Oromo">om</option>
                            <option value="Pashto">ps</option>
                            <option value="Persian">fa</option>
                            <option value="Polish">pl</option>
                            <option value="Portuguese">pt</option>
                            <option value="Punjabi">pa</option>
                            <option value="Quechua">qu</option>
                            <option value="Romanian">ro</option>
                            <option value="Russian">ru</option>
                            <option value="Samoan">sm</option>
                            <option value="Sanskrit">sa</option>
                            <option value="Scots Gaelic">gd</option>
                            <option value="Sepedi">nso</option>
                            <option value="Serbian">sr</option>
                            <option value="Sesotho">st</option>
                            <option value="Shona">sn</option>
                            <option value="Sindhi">sd</option>
                            <option value="Sinhala">si</option>
                            <option value="Slovak">sk</option>
                            <option value="Slovenian">sl</option>
                            <option value="Somali">so</option>
                            <option value="Spanish">es</option>
                            <option value="Sundanese">su</option>
                            <option value="Swahili">sw</option>
                            <option value="Swedish">sv</option>
                            <option value="Tajik">tg</option>
                            <option value="Tamil">ta</option>
                            <option value="Tatar">tt</option>
                            <option value="Telugu">te</option>
                            <option value="Thai">th</option>
                            <option value="Tigrinya">ti</option>
                            <option value="Tsonga">ts</option>
                            <option value="Turkish">tr</option>
                            <option value="Turkmen">tk</option>
                            <option value="Twi">ak</option>
                            <option value="Ukrainian">uk</option>
                            <option value="Urdu">ur</option>
                            <option value="Uyghur">ug</option>
                            <option value="Uzbek">uz</option>
                            <option value="Vietnamese">vi</option>
                            <option value="Welsh">cy</option>
                            <option value="Xhosa">xh</option>
                            <option value="Yiddish">yi</option>
                            <option value="Yoruba">yo</option>
                            <option value="Zulu">zu</option>
                        </select>
                    </span>
                </div>
                <!-- languages bar mobile finish -->
                <!-- country bar mobile start -->
                <div class="mobile-country mobile-menu-right">
                                <span class="country">
                                    <div class="dropdown coun-flag">
                                        <button
                                            class="btn dropdown-toggle"
                                            type="button"
                                            id="dropdownMenuButton"
                                            data-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false"
                                        >
                                            <img src="{{asset('images/india-flag.jpg')}}" alt="India" title="India">
                                            IN
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">
                                                <img
                                                    src="{{asset('images/ae-flag.jpg')}}"
                                                    alt="AE"
                                                    title="AE"
                                                    class="flag"
                                                > AE
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <img
                                                    src="{{asset('images/au-flag.jpg')}}"
                                                    alt="AU"
                                                    title="AU"
                                                    class="flag"
                                                > AU
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <img
                                                    src="{{asset('images/bd-flag.jpg')}}"
                                                    alt="BD"
                                                    title="BD"
                                                    class="flag"
                                                > BD
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <img
                                                    src="{{asset('images/bh-flag.jpg')}}"
                                                    alt="BH"
                                                    title="BH"
                                                    class="flag"
                                                > BH
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <img
                                                    src="{{asset('images/lk-flag.jpg')}}"
                                                    alt="LK"
                                                    title="LK"
                                                    class="flag"
                                                > LK
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <img
                                                    src="{{asset('images/nz-flag.jpg')}}"
                                                    alt="NZ"
                                                    title="NZ"
                                                    class="flag"
                                                > AU
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <img
                                                    src="{{asset('images/om-flag.jpg')}}"
                                                    alt="OM"
                                                    title="OM"
                                                    class="flag"
                                                > OM
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <img
                                                    src="{{asset('images/pk-flag.jpg')}}"
                                                    alt="PK"
                                                    title="PK"
                                                    class="flag"
                                                > PK
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <img
                                                    src="{{asset('images/sa-flag.jpg')}}"
                                                    alt="SA"
                                                    title="SA"
                                                    class="flag"
                                                > SA
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <img
                                                    src="{{asset('images/sg-flag.jpg')}}"
                                                    alt="SG"
                                                    title="SG"
                                                    class="flag"
                                                > SG
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <img
                                                    src="{{asset('images/uk-flag.jpg')}}"
                                                    alt="UK"
                                                    title="UK"
                                                    class="flag"
                                                > UK
                                            </a>
                                        </div>
                                    </div>
                                </span>
                </div>
                <!-- country bar mobile finish -->
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <!-- mobile menu close button start -->
                    <li class="d-inline d-lg-none">
                        <button data-toggle="collapse" data-target="#navbarSupportedContent" class="close float-right">
                            <img src="{{asset('images/close.png')}}">
                        </button>
                    </li>
                    <!-- mobile menu close button finish -->
                    <!-- login and register area mobile start -->
                    <li class="login-area d-lg-none">
                        <img src="{{asset('images/moble-menu-login.png')}}" style="margin-right:10px;">
                        <a class="login-btn" style="display: ;padding: 10px;">Login</a>
                        <a class="register-btn" style="padding: 10px;">Register</a>


                        <!-- login and register area mobile finish -->
                        <!-- Add Listing mobile start -->
                    <li class="add-list d-lg-none">
                        <a data-toggle="modal" data-target="#myModal" style="color:#000;">
                            <img src="{{asset('images/plus.png')}}" width="15" height="15" style="margin-right:5px;">
                            Place Your Ad
                        </a>
                    </li>
                    <li class="social d-lg-none">
                                    <span class="icon-social">
                                        <a href="#" target="_blank">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </span>
                        <span class="icon-social">
                                        <a href="#" target="_blank">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </span>
                        <span class="icon-social">
                                        <a href="#" target="_blank">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </span>
                        <span class="icon-social">
                                        <a href="#" target="_blank">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </span>
                    </li>
                    <!-- social icon area finish -->
                </ul>
            </div>
        </nav>
        <!-- navigation finish -->
        <hr>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="container" style="margin:0px auto;">
                    <ul class="navbar-nav" style="margin:0px auto !important;border:0px solid red;font-size: 13.3px;line-height: 1.43;font-weight: 600;">
                        <div class="row">
                            @php $categories = \App\Helpers\RecordHelper::getCategories(); @endphp
                            @foreach($categories as $category)
                                <!-- Category Start -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                       aria-haspopup="true" aria-expanded="false">
                                        {{$category->name}}
                                    </a>
                                    <!-- SubCategory Start -->
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        @foreach($category->sub_categories as $sub_category)
                                            <a class="dropdown-item" href="#">{{$sub_category->name}}</a>
                                        @endforeach
                                    </div>
                                    <!-- End SubCategory -->
                                </li>
                                    <!-- End Category -->
                        @endforeach
                        </div>
                    </ul>
                </div>
                <hr>
            </div>
        </nav>
        <hr>
    </div>
</header>
