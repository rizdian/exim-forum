@extends('master.master')

@section('title', 'View Forum')

@section('css')
<style>
    .forumpost {
        display: block;
        position: relative;
        margin: 0 0 1em 0;
        padding: 0;
        max-width: 100%;
        margin-left:1%;
    }
    .forumpost .row {
        width: 100%;
        position: relative;
    }
    .maincontent{
        margin-top:5px;
    }
    .forumpost .row .left {
        float: left;
        width: 43px;
        overflow: hidden;
    }
    .forumpost .picture img {
        margin: 4px;
    }
    .forumpost .options .commands, .forumpost .content .attachments, .forumpost .options .footer, .forumpost .options .link {
        text-align: right;
    }
    .forumpost .row .topic, .forumpost .row .content-mask, .forumpost .row .options {
        margin-left: 43px;
    }
    .author{
        height: 35px;
    }
    .reply{
        margin-left: 30px;
    }
    .no-overflow {
        overflow: auto;
        padding-bottom: 1px;
    }     
    .blockquote {
    border: solid 1px #f1f1f1;
    border-radius: 2px;
    font-size: 14px;
    padding: 18px;
}
</style> 
@endsection

@section('content')   
<div class="container" style="margin-top:2%;">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    {{-- <b>Panel Default</b> --}}
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="col-md-2">
                            <h5>Topic</h5>
                        </div>
                        <div class="col-md-1">
                            <h5>:</h5>
                        </div>
                        <div class="col-md-9">
                            <h5>Kendala Perdagangan Bebas </h5>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-2">
                            <h5>Sender</h5>
                        </div>
                        <div class="col-md-1">
                            <h5>:</h5>
                        </div>
                        <div class="col-md-9">
                            <h5>Budi Gunawan</h5>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-2">
                            <h5>Perusahaan</h5>
                        </div>
                        <div class="col-md-1">
                            <h5>:</h5>
                        </div>
                        <div class="col-md-9">
                            <h5>PT. ABC</h5>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-2">
                            <h5>Tanggal Posting</h5>
                        </div>
                        <div class="col-md-1">
                            <h5>:</h5>
                        </div>
                        <div class="col-md-9">
                            <h5>9 Maret 2017</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-info">
                <div class="panel-heading">
                </div>
                <div class="panel-body">
                    <div class="forumpost blockquote">
                        <div class="row header">
                            <div class="left picture">
                                <a href="#">
                                    <img src="{{ URL::to('/') }}/images/flickr-09.jpg" 
                                    class="userpicture defaultuserpic" width="35" height="35">
                                </a>
                            </div>
                            <div class="topic firstpost starter">
                                <div class="author">
                                    Budi Gunawan 
                                    <br>
                                    Senin, 15 Mei 2017, 08:46
                                </div>
                            </div>
                        </div>

                        <div class="row maincontent">
                            <div class="left">
                                <div class="grouppictures">&nbsp;</div>
                            </div>
                            <div class="no-overflow">
                                <div class="content">
                                    <div class="posting fullpost">
                                        <p>Peran pemerintah dalam mengatasi kendala perdagangan bebas</p>
                                        <div class="attachedimages">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row side">
                            <div class="left">&nbsp;</div>
                            <div class="options clearfix">
                                <div class="commands">
                                    <button type="button" class="btn btn-primary btn-xs">Balas</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reply blockquote">
                        <div class="forumpost blockquote">
                            <div class="row header">
                                <div class="left picture">
                                    <a href="#">
                                        <img src="{{ URL::to('/') }}/images/avatar.png" 
                                        class="userpicture defaultuserpic" width="35" height="35">
                                    </a>
                                </div>
                                <div class="topic firstpost starter">
                                    <div class="author">
                                        Thia Santi
                                        <br>
                                        Senin, 15 Mei 2017, 10:50
                                    </div>
                                </div>
                            </div>

                            <div class="row maincontent">
                                <div class="left">
                                    <div class="grouppictures">&nbsp;</div>
                                </div>
                                <div class="no-overflow">
                                    <div class="content">
                                        <div class="posting fullpost">
                                            <p>Presiden Joko Widodo (Jokowi) memberikan perhatian kepada usahamikro, kecil dan menengah (UMKM) untuk masuksistem ekonomi digitalagarbisa mengaksespasar global. Hal itudiungkapkanKepalaStaf PresidenRI, Teten Masduki,dalam konferensipers diJakarta, Rabu. Sebelumnya Presiden Jokowi melakukan kunjungan ke Lembah Silikon (Silicon Valley) yang menjadi pusat industri teknologiinformasidigitaldi AmerikaSerikat(AS)pada 14–18 Februari2016. “Intinya Presiden memberikan perhatian pada UMKM ke digital economy sebagai akses ke pasar global,” katanya, didampingi Menteri Komunikasi dan Informasi (Menkominfo) Rudiantara di Kantor Staf Kepresidenan. Untuk mendukung kegiatan itu, Pemerintah berkomitmen akan membangun infrastruktur konektivitas, sehingga Internet masuk ke seluruh pulau dan segala potensi kekayaan yang dimiliki dapat di akses pasar global.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row side">
                                <div class="left">&nbsp;</div>
                                <div class="options clearfix">
                                    <div class="commands">
                                        <button type="button" class="btn btn-primary btn-xs">Balas</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="reply">
                            <div class="forumpost blockquote">
                                <div class="row header">
                                    <div class="left picture">
                                        <a href="#">
                                            <img src="{{ URL::to('/') }}/images/flickr-09.jpg" 
                                            class="userpicture defaultuserpic" width="35" height="35">
                                        </a>
                                    </div>
                                    <div class="topic firstpost starter">
                                        <div class="author">
                                            Budi Gunawan
                                            <br>
                                            Senin, 15 Mei 2017, 11:10
                                        </div>
                                    </div>
                                </div>

                                <div class="row maincontent">
                                    <div class="left">
                                        <div class="grouppictures">&nbsp;</div>
                                    </div>
                                    <div class="no-overflow">
                                        <div class="content">
                                            <div class="posting fullpost">
                                                <p>Sementara Rudiantara mengatakan, hampir semua dunia telah memposisikan masuk digital ekonomi, seperti AS, Tiongkok dan India yang sudah memiliki kapitalisasi pasar perdagangan secara elektronik (ecommerce) yang besar. Pihaknya mengungkapkan UMKM di Indonesia sebanyak 50.000 dan memberi sumbangan ke gross domestic product/GDP senilai 50 persen, sedangkan di AS sudah mencapai 60 persen. Menteri Rudiantara menyebut bedanya di AS sudah digital, sedangkan di Indonesia belum karena Internet di Indonesia belum merata. Rudiantara juga mengungkapkan bahwa salah satu misi kunjungan PresidenJokowi ke SiliconValleyadalahbisamengajakpelakupasardigitalmasukke Indonesia. Di Silicon Valley, lanjut Rudiantara, sudah puluhan tahun terbentuk ekosistem ekonomi digital, maka Indonesia mengundang mereka untuk membantu percepatan ekosistem di Indonesia terbentuk lebih cepat. Untuk itu, ia mengungkap berbagai kebijakan telah dilakukan, salah satunya membuka investasi di bidang e-commerce yang sebelumnya tertutup untuk asing. Rudiantara memaparkan, untuk UMKM yang bermodal kurang Rp10 miliar tertutup untuk asing, sedangkan yang memiliki modal hingga Rp100 miliar bisa dimilikihingga49 persendan untuk modal Rp100 miliarlebihbisa dikuasai100 persen. Masuknya investor ke sektor e-commerce ini harapannya juga melalui bursa efek melalui penawaran saham perdana(initialpublicoffering/IPO)atau penawaransaham berikutnya(rightissue). Selain itu Rudiantara juga mengungkapkan pihaknya pada akhir Maret 2016 akan menerapkan regulasi bahwa perusahaan, seperti Facebook, Twitter dan lain-lainnya harus berbentuk Badan Usaha Tetap (BUT). Dikatakan, dengan penetapan harus berbentuk badan usaha tetap ini agar mempermudah penerapan pajak dan melindungi konsumen. Pemerintah berharap target e-commerce pada 2020 sebesar 130 miliardolarAS dapattercapai.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row side">
                                    <div class="left">&nbsp;</div>
                                    <div class="options clearfix">
                                        <div class="commands">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="forumpost blockquote">
                                <div class="row header">
                                    <div class="left picture">
                                        <a href="#">
                                            <img src="{{ URL::to('/') }}/images/avatar.png" 
                                            class="userpicture defaultuserpic" width="35" height="35">
                                        </a>
                                    </div>
                                    <div class="topic firstpost starter">
                                        <div class="author">
                                            Thia Santi
                                            <br>
                                            Senin, 15 Mei 2017, 12:50
                                        </div>
                                    </div>
                                </div>

                                <div class="row maincontent">
                                    <div class="left">
                                        <div class="grouppictures">&nbsp;</div>
                                    </div>
                                    <div class="no-overflow">
                                        <div class="content">
                                            <div class="posting fullpost">
                                                <p>Bagaimana ?</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row side">
                                    <div class="left">&nbsp;</div>
                                    <div class="options clearfix">
                                        <div class="commands">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div> {{-- END panel-body --}}
                
            </div>
        </div>
    </div>
</div>
@endsection