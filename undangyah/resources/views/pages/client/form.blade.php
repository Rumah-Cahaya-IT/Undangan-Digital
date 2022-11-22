@extends('layouts.main')

@section('title', 'Tema Undang Yah')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<style>
    .form-section{
        display: none;
    }

    .form-section.current{
        display: inherit;
    }

    .parsley=errors-list{
        list-style-type: none;
    }

</style>
    <section class="mt-150" id="harga">
        <div class="container">
            <form class="contact-form" action="" method="post" enctype="multipart/form-data">
                <div class="shadow-sm p-3 mb-5 bg-default rounded">
                    <p class="fs-4 font-semibold">Mempelai Pria</p>
                    <p class="">
                        Silakan isi biodata mempelai Pria dengan lengkap, berikut dengan foto yang berkualitas bagus.
                    </p>
                    <hr class="border border-danger border-2 opacity-50">
                    <div class="form-section">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Panggilan</label>
                            <input type="nama" class="form-control" id="panggilan" name="panggilan" placeholder="Nama panggilan mempelai pria" value="" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="panggilan" class="form-label">Nama Lengkap</label>
                            <input type="panggilan" class="form-control" id="nama" name="nama" placeholder="Nama lengkap mempelai pria" value="" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-section">
                        <div class="mb-3">
                            <label for="nama_ayah" class="form-label">Nama Ayah</label>
                            <input type="nama_ayah" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Nama Ayah" value="" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-section">
                        <div class="mb-3">
                            <label for="nama_ibu" class="form-label">Nama Ibu</label>
                            <input type="nama_ibu" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Nama Ibu" value="" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-navigation">
                        <button type="button" class="previous btn btn-info float-left px-5 py-2 mt-2">Kembali</button>
                        <button type="button" class="next btn btn-default float-right px-5 py-2 mt-2">Selanjutnya</button>
                        <button type="submit" class="btn btn-default float-right px-5 py-2 mt-2">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(function(){
            var $sections = $('.form-section');
            function navigateTo(index) {
                $sections.removeClass('current').eq(index).addClass('current');
                $('.form-navigation .previous').toggle(index>0);
                var atTheEnd = index >= $sections.length - 1;
                $('.form-navigation .next').toggle(!atTheEnd);
                $('.form-navigation [type=submit]').toggle(atTheEnd);
            }

            function curIndex() {
                return $sections.index($sections.filter('.current'));
            }

            $('.form-navigation .previous').click(function() {
                navigateTo(curIndex()-1);
            });

            $('.form-navigation .next').click(function () {
                $('.contact-form').parsley().whenValidate({
                    group: 'block-' + curIndex()
                }).done(function () {
                    navigateTo(curIndex()+1);
                });
            });

            $sections.each(function (index,section) {
                $(section).find(':input').attr('data-parsley-group','block'+index);
            });
            navigateTo(0);
        })
    </script>

@endsection
