@extends('layouts.principal')
@section('content')
    <!-- banner -->
    <div class="courses_banner">
        <div class="container">
            <h3>Contacto</h3>
            <p class="description">
                Visite nuestras instalaciones.
            </p>
            <div class="breadcrumb1">
                <ul>
                    <li class="icon6"><a href="index.html">Home</a></li>
                    <li class="current-page">Contáctenos</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //banner -->
    <div class="features">
        <div class="container">
            <h1>Visítanos</h1>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.597753392325!2d-77.0757989851871!3d-12.071173591451052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c9115641c507%3A0x91987c866ebeabd1!2sAv.+Sim%C3%B3n+Bolivar+1848%2C+Pueblo+Libre+15084!5e0!3m2!1ses!2spe!4v1448951885272" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <p>Facultad de Ingeniería de Sistemas, Cómputo y Telecomunicaciones de la Universidad Inca Garcilaso de la Vega.</p>
            <div class="wrapper">
                <div class="col_1">
                    <i class="fa fa-home  icon2"></i>
                    <div class="box">
                        <p class="marTop9">7401 Excepteur sint,<br>Deserunt mollit .</p>
                    </div>
                </div>

                <div class="col_2">
                    <i class="fa fa-phone  icon2"></i>
                    <div class="box">
                        <p class="marTop9">+1 800 254 5478<br>+1 800 587 47895</p>
                    </div>
                </div>
                <div class="col_2">
                    <i class="fa fa-envelope icon2"></i>
                    <div class="box">
                        <p class="m_6"><a href="mailto@example.com" class="link4">info(at)Gutleben.com</a></p>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <form class="contact_form">
                <h2>Contáctenos</h2>
                <div class="col-md-6 grid_6">
                    <input type="text" class="text" value="Name" placeholder="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
                    <input type="text" class="text" value="Email" placeholder="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
                    <input type="text" class="text" value="Phone" placeholder="phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}">
                </div>

                <div class="col-md-6 grid_6">
                    <textarea value="Message" placeholder="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
                </div>
                <div class="clearfix"> </div>
                <div class="btn_3">
                    <a href="#" class="more_btn" data-type="submit">Send message</a>
                </div>
            </form>
        </div>
    </div>

    @endsection