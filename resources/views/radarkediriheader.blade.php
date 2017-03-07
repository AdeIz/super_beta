<!-- header --> 
<div id="headerweb">
    <div id="supertop"></div>
    <div class="wrapper">
        <div class="top">
            <div class="left">
                <div class="stamp-logo">
                    <a href="#"><img src="{{ asset('images/stamp+radar+bali+logo.png') }}" alt="radar+bali+logo"></a>
                </div>
                <div class="date item">Selasa, 23 Agustus 2016</div><br>
                <div class="weather item">28<sup>o</sup>C <img src="{{ asset('images/rain.png') }}" alt=""/></div>              
            </div>
            <div class="center">
                <a href="radarbali"><img src="{{ asset('images/kediri.png') }}" alt=""/></a>
            </div>
            <div class="right menuradar">
                <span>Jawa Pos Radar</span>
                <div class="imgmap item">&nbsp;</div>
                <a href="#" class="signbtn">Sign In</a>
            </div>
        </div>
        <div class="bottom">
            <div class="nav-mobile visible-xs">
                Menu
                <div class="wrp-span">
                    <span>&nbsp;</span>
                    <span>&nbsp;</span>
                    <span>&nbsp;</span>
                </div>
            </div>
        </div>  
    </div>
    <div class="menu-listradar">
        <div class="wrapper">
            <div class="row">
                <div class="col-md-3">
                    <div class="item-gridmenu border left">
                        <ul class="fa-ul">
                            <li><a href="radarbali"><i class="fa-li fa fa-angle-right">&nbsp;</i>Radar Bali</a></li>
                            <li><a href="radarbanyuwangi"><i class="fa-li fa fa-angle-right">&nbsp;</i>Radar Banyuwangi</a></li>
                            <li><a href="radarbojonegoro"><i class="fa-li fa fa-angle-right">&nbsp;</i>Radar Bojonegoro</a></li>
                            <li><a href="radarbromo"><i class="fa-li fa fa-angle-right">&nbsp;</i>Radar Bromo</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item-gridmenu border left">
                        <ul class="fa-ul">
                            <li><a href="radarjember"><i class="fa-li fa fa-angle-right">&nbsp;</i>Radar Jember</a></li>
                            <li><a href="radarjogja"><i class="fa-li fa fa-angle-right">&nbsp;</i>Radar Jogja</a></li>
                            <li><a href="radarkediri"><i class="fa-li fa fa-angle-right">&nbsp;</i>Radar Kediri</a></li>
                            <li><a href="radarkudus"><i class="fa-li fa fa-angle-right">&nbsp;</i>Radar Kudus</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item-gridmenu border left">
                        <ul class="fa-ul">
                            <li><a href="radarmadiun"><i class="fa-li fa fa-angle-right">&nbsp;</i>Radar Madiun</a></li>
                            <li><a href="radarmadura"><i class="fa-li fa fa-angle-right">&nbsp;</i>Radar Madura</a></li>
                            <li><a href="radarmalang"><i class="fa-li fa fa-angle-right">&nbsp;</i>Radar Malang</a></li>
                            <li><a href="radarmojokerto"><i class="fa-li fa fa-angle-right">&nbsp;</i>Radar Mojokerto</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item-gridmenu border left right">
                        <ul class="fa-ul">
                            <li><a href="radarsemarang"><i class="fa-li fa fa-angle-right">&nbsp;</i>Radar Semarang</a></li>
                            <li><a href="radarsolo"><i class="fa-li fa fa-angle-right">&nbsp;</i>Radar Solo</a></li>
                            <li><a href="radarsurabaya"><i class="fa-li fa fa-angle-right">&nbsp;</i>Radar Surabaya</a></li>
                            <li><a href="radartulungagung"><i class="fa-li fa fa-angle-right">&nbsp;</i>Radar Tulungagung</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>        
    </div><!-- /menu-listradar -->
    
    <div class="container-mainmenu">
        <div class="wrapper">
            <div class="fixlogo"><img src="{{ asset('images/mainlogo.png') }}" alt=""/></div>
            <div class="mainmenu">
                <ul>
                    <li><a href="#">NEWS</a></li>
                    @if(isset($headerCategories) and count($headerCategories))
                        @foreach($headerCategories as $category)
                            <li @if($category->children and $category->children->count()) class="submenu" @endif>
                                <a href="#">{{ $category->name_upper or '' }}</a>
                                @if($category->children and $category->children->count()) 
                                    <div class="val-submenu">
                                        <div class="wrapper">
                                            <div class="row">
                                                <div class="col-md-3 omega">
                                                    <div class="menuleft">
                                                        <h4>{{ $category->name_upper or '' }}</h4>
                                                        <ul>
                                                            @foreach($category->children as $child)
                                                                <li><a href="#">{{ $child->name_ucfirst or '' }}</a></li>                                             
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-9 alpha">
                                                    <div class="menuright">
                                                        <div class="top">
                                                            <div class="imgwrp"><img src="{{ asset('images/img-golf.jpg') }}" alt=""/>  </div>
                                                            <h3><a harfe="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididu</a></h3>
                                                            <div class="label-category">
                                                                <span>TRENDING</span>
                                                                <a href="#"><span>HANKAM </span></a>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4 border">
                                                                <div class="item-right">
                                                                    <a href="#">Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</a>
                                                                    <a href="#"><span>POLITIK</span></a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 border">
                                                                <div class="item-right">
                                                                    <a href="#">Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</a>
                                                                    <a href="#"><span>POLITIK</span></a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 border">
                                                                <div class="item-right">
                                                                    <a href="#">Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</a>
                                                                    <a href="#"><span>POLITIK</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /val-submenu -->
                                @endif
                            </li>
                        @endforeach
                    @endif

                    <li class="submenu"><a href="#">GALERI</a>
                        <div class="val-submenu">
                            <div class="wrapper">
                                <div class="row">
                                    <div class="col-md-3 omega">
                                        <div class="menuleft">
                                            <ul>
                                                <li><a href="#">Video</a></li>
                                                <li><a href="#">Foto</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-9 alpha">
                                        <div class="menuright">
                                            <div class="top">
                                                <div class="imgwrp"><img src="{{ asset('images/img-golf.jpg') }}" alt=""/>  </div>
                                                <h3><a harfe="#">Lorem consectetur adipiscing elit, sed do eiusmod tempor incididu</a></h3>
                                                <div class="label-category">
                                                    <span>TRENDING</span>
                                                    <a href="#"><span>HANKAM </span></a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit , consectetur adipiscing elit, sed do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit amet,  adipiscing elit, sed do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit amet, consectetur adipiscing elit,  do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /val-submenu -->                    
                    </li>
                    <li class="submenu"><a href="#">GALERI</a>
                        <div class="val-submenu">
                            <div class="wrapper">
                                <div class="row">
                                    <div class="col-md-3 omega">
                                        <div class="menuleft">
                                            <ul>
                                                <li><a href="#">Video</a></li>
                                                <li><a href="#">Foto</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-9 alpha">
                                        <div class="menuright">
                                            <div class="top">
                                                <div class="imgwrp"><img src="{{ asset('images/img-golf.jpg') }}" alt=""/>  </div>
                                                <h3><a harfe="#">Lorem consectetur adipiscing elit, sed do eiusmod tempor incididu</a></h3>
                                                <div class="label-category">
                                                    <span>TRENDING</span>
                                                    <a href="#"><span>HANKAM </span></a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit , consectetur adipiscing elit, sed do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit amet,  adipiscing elit, sed do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit amet, consectetur adipiscing elit,  do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /val-submenu -->                    
                    </li>
                    <li class="submenu"><a href="#">GALERI</a>
                        <div class="val-submenu">
                            <div class="wrapper">
                                <div class="row">
                                    <div class="col-md-3 omega">
                                        <div class="menuleft">
                                            <ul>
                                                <li><a href="#">Video</a></li>
                                                <li><a href="#">Foto</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-9 alpha">
                                        <div class="menuright">
                                            <div class="top">
                                                <div class="imgwrp"><img src="{{ asset('images/img-golf.jpg') }}" alt=""/>  </div>
                                                <h3><a harfe="#">Lorem consectetur adipiscing elit, sed do eiusmod tempor incididu</a></h3>
                                                <div class="label-category">
                                                    <span>TRENDING</span>
                                                    <a href="#"><span>HANKAM </span></a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit , consectetur adipiscing elit, sed do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit amet,  adipiscing elit, sed do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit amet, consectetur adipiscing elit,  do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /val-submenu -->                    
                    </li>
                    <li class="submenu"><a href="#">GALERI</a>
                        <div class="val-submenu">
                            <div class="wrapper">
                                <div class="row">
                                    <div class="col-md-3 omega">
                                        <div class="menuleft">
                                            <ul>
                                                <li><a href="#">Video</a></li>
                                                <li><a href="#">Foto</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-9 alpha">
                                        <div class="menuright">
                                            <div class="top">
                                                <div class="imgwrp"><img src="{{ asset('images/img-golf.jpg') }}" alt=""/>  </div>
                                                <h3><a harfe="#">Lorem consectetur adipiscing elit, sed do eiusmod tempor incididu</a></h3>
                                                <div class="label-category">
                                                    <span>TRENDING</span>
                                                    <a href="#"><span>HANKAM </span></a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit , consectetur adipiscing elit, sed do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit amet,  adipiscing elit, sed do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit amet, consectetur adipiscing elit,  do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /val-submenu -->                    
                    </li>
                    <li class="submenu"><a href="#">GALERI</a>
                        <div class="val-submenu">
                            <div class="wrapper">
                                <div class="row">
                                    <div class="col-md-3 omega">
                                        <div class="menuleft">
                                            <ul>
                                                <li><a href="#">Video</a></li>
                                                <li><a href="#">Foto</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-9 alpha">
                                        <div class="menuright">
                                            <div class="top">
                                                <div class="imgwrp"><img src="{{ asset('images/img-golf.jpg') }}" alt=""/>  </div>
                                                <h3><a harfe="#">Lorem consectetur adipiscing elit, sed do eiusmod tempor incididu</a></h3>
                                                <div class="label-category">
                                                    <span>TRENDING</span>
                                                    <a href="#"><span>HANKAM </span></a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit , consectetur adipiscing elit, sed do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit amet,  adipiscing elit, sed do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit amet, consectetur adipiscing elit,  do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /val-submenu -->                    
                    </li>
                    <li class="submenu"><a href="#">GALERI</a>
                        <div class="val-submenu">
                            <div class="wrapper">
                                <div class="row">
                                    <div class="col-md-3 omega">
                                        <div class="menuleft">
                                            <ul>
                                                <li><a href="#">Video</a></li>
                                                <li><a href="#">Foto</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-9 alpha">
                                        <div class="menuright">
                                            <div class="top">
                                                <div class="imgwrp"><img src="{{ asset('images/img-golf.jpg') }}" alt=""/>  </div>
                                                <h3><a harfe="#">Lorem consectetur adipiscing elit, sed do eiusmod tempor incididu</a></h3>
                                                <div class="label-category">
                                                    <span>TRENDING</span>
                                                    <a href="#"><span>HANKAM </span></a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit , consectetur adipiscing elit, sed do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit amet,  adipiscing elit, sed do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit amet, consectetur adipiscing elit,  do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /val-submenu -->                    
                    </li>
                    <li class="submenu"><a href="#">GALERI</a>
                        <div class="val-submenu">
                            <div class="wrapper">
                                <div class="row">
                                    <div class="col-md-3 omega">
                                        <div class="menuleft">
                                            <ul>
                                                <li><a href="#">Video</a></li>
                                                <li><a href="#">Foto</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-9 alpha">
                                        <div class="menuright">
                                            <div class="top">
                                                <div class="imgwrp"><img src="{{ asset('images/img-golf.jpg') }}" alt=""/>  </div>
                                                <h3><a harfe="#">Lorem consectetur adipiscing elit, sed do eiusmod tempor incididu</a></h3>
                                                <div class="label-category">
                                                    <span>TRENDING</span>
                                                    <a href="#"><span>HANKAM </span></a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit , consectetur adipiscing elit, sed do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit amet,  adipiscing elit, sed do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit amet, consectetur adipiscing elit,  do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /val-submenu -->                    
                    </li>
                    <li class="submenu"><a href="#">GALERI</a>
                        <div class="val-submenu">
                            <div class="wrapper">
                                <div class="row">
                                    <div class="col-md-3 omega">
                                        <div class="menuleft">
                                            <ul>
                                                <li><a href="#">Video</a></li>
                                                <li><a href="#">Foto</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-9 alpha">
                                        <div class="menuright">
                                            <div class="top">
                                                <div class="imgwrp"><img src="{{ asset('images/img-golf.jpg') }}" alt=""/>  </div>
                                                <h3><a harfe="#">Lorem consectetur adipiscing elit, sed do eiusmod tempor incididu</a></h3>
                                                <div class="label-category">
                                                    <span>TRENDING</span>
                                                    <a href="#"><span>HANKAM </span></a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit , consectetur adipiscing elit, sed do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit amet,  adipiscing elit, sed do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit amet, consectetur adipiscing elit,  do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /val-submenu -->                    
                    </li>
                    <li class="submenu"><a href="#">GALERI</a>
                        <div class="val-submenu">
                            <div class="wrapper">
                                <div class="row">
                                    <div class="col-md-3 omega">
                                        <div class="menuleft">
                                            <ul>
                                                <li><a href="#">Video</a></li>
                                                <li><a href="#">Foto</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-9 alpha">
                                        <div class="menuright">
                                            <div class="top">
                                                <div class="imgwrp"><img src="{{ asset('images/img-golf.jpg') }}" alt=""/>  </div>
                                                <h3><a harfe="#">Lorem consectetur adipiscing elit, sed do eiusmod tempor incididu</a></h3>
                                                <div class="label-category">
                                                    <span>TRENDING</span>
                                                    <a href="#"><span>HANKAM </span></a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit , consectetur adipiscing elit, sed do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit amet,  adipiscing elit, sed do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit amet, consectetur adipiscing elit,  do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /val-submenu -->                    
                    </li>
                    <li class="submenu"><a href="#">GALERI</a>
                        <div class="val-submenu">
                            <div class="wrapper">
                                <div class="row">
                                    <div class="col-md-3 omega">
                                        <div class="menuleft">
                                            <ul>
                                                <li><a href="#">Video</a></li>
                                                <li><a href="#">Foto</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-9 alpha">
                                        <div class="menuright">
                                            <div class="top">
                                                <div class="imgwrp"><img src="{{ asset('images/img-golf.jpg') }}" alt=""/>  </div>
                                                <h3><a harfe="#">Lorem consectetur adipiscing elit, sed do eiusmod tempor incididu</a></h3>
                                                <div class="label-category">
                                                    <span>TRENDING</span>
                                                    <a href="#"><span>HANKAM </span></a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit , consectetur adipiscing elit, sed do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit amet,  adipiscing elit, sed do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit amet, consectetur adipiscing elit,  do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /val-submenu -->                    
                    </li>
                    <li class="submenu"><a href="#">GALERI</a>
                        <div class="val-submenu">
                            <div class="wrapper">
                                <div class="row">
                                    <div class="col-md-3 omega">
                                        <div class="menuleft">
                                            <ul>
                                                <li><a href="#">Video</a></li>
                                                <li><a href="#">Foto</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-9 alpha">
                                        <div class="menuright">
                                            <div class="top">
                                                <div class="imgwrp"><img src="{{ asset('images/img-golf.jpg') }}" alt=""/>  </div>
                                                <h3><a harfe="#">Lorem consectetur adipiscing elit, sed do eiusmod tempor incididu</a></h3>
                                                <div class="label-category">
                                                    <span>TRENDING</span>
                                                    <a href="#"><span>HANKAM </span></a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit , consectetur adipiscing elit, sed do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit amet,  adipiscing elit, sed do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit amet, consectetur adipiscing elit,  do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /val-submenu -->                    
                    </li>
                    <li class="submenu"><a href="#">GALERI</a>
                        <div class="val-submenu">
                            <div class="wrapper">
                                <div class="row">
                                    <div class="col-md-3 omega">
                                        <div class="menuleft">
                                            <ul>
                                                <li><a href="#">Video</a></li>
                                                <li><a href="#">Foto</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-9 alpha">
                                        <div class="menuright">
                                            <div class="top">
                                                <div class="imgwrp"><img src="{{ asset('images/img-golf.jpg') }}" alt=""/>  </div>
                                                <h3><a harfe="#">Lorem consectetur adipiscing elit, sed do eiusmod tempor incididu</a></h3>
                                                <div class="label-category">
                                                    <span>TRENDING</span>
                                                    <a href="#"><span>HANKAM </span></a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit , consectetur adipiscing elit, sed do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit amet,  adipiscing elit, sed do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit amet, consectetur adipiscing elit,  do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /val-submenu -->                    
                    </li>
                    <li class="submenu"><a href="#">GALERI</a>
                        <div class="val-submenu">
                            <div class="wrapper">
                                <div class="row">
                                    <div class="col-md-3 omega">
                                        <div class="menuleft">
                                            <ul>
                                                <li><a href="#">Video</a></li>
                                                <li><a href="#">Foto</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-9 alpha">
                                        <div class="menuright">
                                            <div class="top">
                                                <div class="imgwrp"><img src="{{ asset('images/img-golf.jpg') }}" alt=""/>  </div>
                                                <h3><a harfe="#">Lorem consectetur adipiscing elit, sed do eiusmod tempor incididu</a></h3>
                                                <div class="label-category">
                                                    <span>TRENDING</span>
                                                    <a href="#"><span>HANKAM </span></a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit , consectetur adipiscing elit, sed do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit amet,  adipiscing elit, sed do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit amet, consectetur adipiscing elit,  do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /val-submenu -->                    
                    </li>
                    <li class="submenu"><a href="#">GALERI</a>
                        <div class="val-submenu">
                            <div class="wrapper">
                                <div class="row">
                                    <div class="col-md-3 omega">
                                        <div class="menuleft">
                                            <ul>
                                                <li><a href="#">Video</a></li>
                                                <li><a href="#">Foto</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-9 alpha">
                                        <div class="menuright">
                                            <div class="top">
                                                <div class="imgwrp"><img src="{{ asset('images/img-golf.jpg') }}" alt=""/>  </div>
                                                <h3><a harfe="#">Lorem consectetur adipiscing elit, sed do eiusmod tempor incididu</a></h3>
                                                <div class="label-category">
                                                    <span>TRENDING</span>
                                                    <a href="#"><span>HANKAM </span></a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit , consectetur adipiscing elit, sed do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit amet,  adipiscing elit, sed do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit amet, consectetur adipiscing elit,  do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /val-submenu -->                    
                    </li>
                    <li class="submenu"><a href="#">GALERI</a>
                        <div class="val-submenu">
                            <div class="wrapper">
                                <div class="row">
                                    <div class="col-md-3 omega">
                                        <div class="menuleft">
                                            <ul>
                                                <li><a href="#">Video</a></li>
                                                <li><a href="#">Foto</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-9 alpha">
                                        <div class="menuright">
                                            <div class="top">
                                                <div class="imgwrp"><img src="{{ asset('images/img-golf.jpg') }}" alt=""/>  </div>
                                                <h3><a harfe="#">Lorem consectetur adipiscing elit, sed do eiusmod tempor incididu</a></h3>
                                                <div class="label-category">
                                                    <span>TRENDING</span>
                                                    <a href="#"><span>HANKAM </span></a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit , consectetur adipiscing elit, sed do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit amet,  adipiscing elit, sed do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit amet, consectetur adipiscing elit,  do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /val-submenu -->                    
                    </li>
                    <li class="submenu"><a href="#">GALERI</a>
                        <div class="val-submenu">
                            <div class="wrapper">
                                <div class="row">
                                    <div class="col-md-3 omega">
                                        <div class="menuleft">
                                            <ul>
                                                <li><a href="#">Video</a></li>
                                                <li><a href="#">Foto</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-9 alpha">
                                        <div class="menuright">
                                            <div class="top">
                                                <div class="imgwrp"><img src="{{ asset('images/img-golf.jpg') }}" alt=""/>  </div>
                                                <h3><a harfe="#">Lorem consectetur adipiscing elit, sed do eiusmod tempor incididu</a></h3>
                                                <div class="label-category">
                                                    <span>TRENDING</span>
                                                    <a href="#"><span>HANKAM </span></a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit , consectetur adipiscing elit, sed do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit amet,  adipiscing elit, sed do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit amet, consectetur adipiscing elit,  do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /val-submenu -->                    
                    </li>   
                    <li class="submenu"><a href="#">MORE</a>
                        <div class="val-submenu">
                            <div class="wrapper">
                                <div class="row">
                                    <div class="col-md-3 omega">
                                        <div class="menuleft">
                                            <ul>
                                                <li><a href="#">Buku</a></li>
                                                <li><a href="#">Jagad</a></li>
                                                <li><a href="#">Ruang Putih</a></li>
                                                <li><a href="#">Pembaca Menulis</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-9 alpha">
                                        <div class="menuright">
                                            <div class="top">
                                                <div class="imgwrp"><img src="{{ asset('images/img-golf.jpg') }}" alt=""/>  </div>
                                                <h3><a harfe="#">Lorem consectetur adipiscing elit, sed do eiusmod tempor incididu</a></h3>
                                                <div class="label-category">
                                                    <span>TRENDING</span>
                                                    <a href="#"><span>HANKAM </span></a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit , consectetur adipiscing elit, sed do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit amet,  adipiscing elit, sed do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 border">
                                                    <div class="item-right">
                                                        <a href="#">Dolor sit amet, consectetur adipiscing elit,  do eiusmod tempor</a>
                                                        <a href="#"><span>POLITIK</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /val-submenu -->                    
                    </li>   
                    <li class="hidefix"><a href="#" class="showsearch hidden-xs "><img src="{{ asset('images/icon-search.png') }}" alt=""/></a></li> 
                </ul>
                <div class="wrp-searchinput">
                    <input type="text" placeholder="Cari..." />
                    <input type="submit" value="" />               
                    <a class="close-search hidden-xs "><i class="fa fa-times"></i></a>
                </div>
            </div>
        </div>
    </div><!-- /container-mainmenu -->
</div><!-- endheaderweb -->