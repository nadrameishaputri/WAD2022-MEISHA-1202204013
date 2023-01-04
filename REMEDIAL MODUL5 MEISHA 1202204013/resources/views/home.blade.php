@extends('layouts.main')


@section('container')
    <center><strong> <h3 class="mb-5">About Us</h3></strong></center>

    {{-- Deskripsi Home --}}
    <div class="row">
        <div class="col-md-6">
            <img src="img/vaccine.jpg" alt="Vaccine Photo" style="width: 100%; height: 100%;">
        </div>
        <div class="col-md-6 mt-5">
            <p style="text-align: justify">
                Vaccination is a simple, safe, and effective way of protecting you against harmful diseases, before you come into contact with them. It uses your body’s natural defenses to build resistance to specific infections and makes your immune system stronger.

                Vaccines train your immune system to create antibodies, just as it does when it’s exposed to a disease. However, because vaccines contain only killed or weakened forms of germs like viruses or bacteria, they do not cause the disease or put you at risk of its complications.<br>
                <p style="font-size: 10px;">Source: https://www.who.int/news-room/questions-and-answers/item/vaccines-and-immunization-what-is-vaccination</p> 
            </p>
        </div>
    </div>
@endsection

