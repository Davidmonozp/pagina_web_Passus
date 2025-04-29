<!-- Responsive passus ips -->

@charset "utf-8";
/* CSS Document */

/******************************

[Table of Contents]

1. 1840px
2. 1760px
3. 1600px
4. 1440px
5. 1380px
6. 1360px
7. 1280px
8. 1199px
9. 1100px
10. 1024px
11. 991px
12. 959px
13. 880px
14. 768px
15. 767px
16. 667px
17. 575px
18. 539px
19. 480px
20. 479px
21. 414px
22. 400px
23. 375px









******************************/

/************
1. 1840px
************/

@media only screen and (max-width: 1840px) {
	.main_nav {
		margin-left: 143px;
	}
}

/************
2. 1760px
************/

@media only screen and (max-width: 1760px) {
	.work_hours {
		display: none;
	}
}

/************
3. 1600px
************/

@media only screen and (max-width: 1600px) {
	.main_nav {
		margin-left: 54px;
	}

	.carousel-item img {
		height: 53vh;
		object-fit: cover;
		margin-top: 181px;
	}
}

/************
4. 1440px
************/

@media only screen and (max-width: 1440px) {
	.header_phone {
		display: none;
	}

	.carousel-item img {
		height: 53vh;
		object-fit: cover;
		margin-top: 181px;
	}
}

/************
5. 1380px
************/

@media only screen and (max-width: 1380px) {

	.carousel-item img {
		height: 67vh;
		object-fit: cover;
		margin-top: 181px;
	}
}

/************
6. 1360px
************/

@media only screen and (max-width: 1366px) {

	.carousel-item img {
		height: 74vh;
		object-fit: cover;
		margin-top: 2px;
	}

}

/************
7. 1280px
************/

@media only screen and (max-width: 1280px) {
	.carousel-item img {
		margin-top: 140px;
		height: 47vh;
		object-fit: cover;
	}

	.main_nav ul li:not(:last-child) {
		margin-right: 29px;
	}
}

/************
8. 1199px
************/

@media only screen and (max-width: 1199px) {
	.header_button {
		display: none;
	}

	.home_slider_dots {
		left: calc((100vw - 930px) / 2);
	}
}

/************
9. 1100px
************/

@media only screen and (max-width: 1100px) {}

/************
10. 1024px
************/

@media only screen and (max-width: 1024px) {

	.carousel-item img {
		margin-top: 140px;
		height: 26vh;
		object-fit: cover;
	}
	
	.sedes {
		grid-area: sedes;
		text-align: start;
	}

	/* .sedes ul {
		margin-left: 40px;
	} */
}

/************
11. 991px
************/

@media only screen and (max-width: 991px) {

	.main_nav,
	.header_social {
		display: none;
	}

	.carousel-item img {
		margin-top: 140px;
		height: 37vh;
		object-fit: cover;
	}

	.home_slider_dots {
		left: calc((100vw - 690px) / 2);
	}

	.hamburger {
		display: block !important;
	}

	.intro_form_container {
		margin-top: 102px;
	}

	.why_image {
		position: relative;
		bottom: auto;
		right: auto;
	}

	.why_content {
		padding-bottom: 60px;
	}

	.why_image img {
		max-width: 100%;
	}

	.cta_phone {
		margin-top: 33px;
	}

	.footer_col:not(:last-child) {
		margin-bottom: 80px;
	}

	.footer_location,
	.footer_contact {
		padding-top: 0;
	}
}

@media only screen and (max-width: 967px) {
	.carousel-item img {
		margin-top: 140px;
		height: 56vh;
		object-fit: cover;
	}
}

/************
12. 959px
************/

@media only screen and (max-width: 959px) {
	.carousel-item img {
		margin-top: 140px;
		height: 53vh;
		object-fit: cover;
	}
}

@media only screen and (max-width: 915px) {
	.carousel-item img {
		margin-top: 140px;
		height: 48vh;
		object-fit: cover;
	}
}


@media only screen and (max-width: 896px) {
	.carousel-item img {
		margin-top: 140px;
		height: 82vh;
		object-fit: cover;
	}

	.footer {
		grid-template-columns: repeat(2, 1fr);
		/* 2 columnas para pantallas medianas */
		grid-template-areas:
			"mapa_sitio servicios"
			"sedes contactanos_redes";
		/* Reorganizamos las áreas en 2 filas */
	}

	/* .servicios p {
		display: none;
	} */
}

/************
13. 880px
************/

@media only screen and (max-width: 880px) {
	.carousel-item img {
		margin-top: 140px;
		height: 37vh;
		object-fit: cover;
	}
}



/************
14. 768px
************/

@media only screen and (max-width: 768px) {
	.carousel-item img {
		margin-top: 140px;
		height: 37vh;
		object-fit: cover;
	}
}

/************
15. 767px
************/

@media only screen and (max-width: 767px) {

	.carousel-item img {
		margin-top: 140px;
		height: 25vh;
		object-fit: cover;
	}

	.home_slider_dots {
		left: calc((100vw - 510px) / 2);
	}

	.home_content {
		max-width: 100%;
	}

	.home_title {
		font-size: 48px;
	}

	.home_subtitle {
		font-size: 24px;
	}

	.milestone_col:not(:last-child) {
		margin-bottom: 50px;
	}

	.extra_content {
		width: 100%;
	}

	.footer_bar_content {
		height: auto;
		padding-top: 30px;
		padding-bottom: 30px;
	}

	.footer_nav {
		margin-top: 15px;
	}
}

/************
16. 667px
************/

@media only screen and (max-width: 667px) {
	.carousel-item img {
		margin-top: 140px;
		height: 36vh;
		object-fit: cover;
	}

	.footer {
		grid-template-columns: repeat(2, 1fr);
		/* 2 columnas para pantallas medianas */
		grid-template-areas:
			"mapa_sitio servicios"
			"sedes contactanos_redes";
		/* Reorganizamos las áreas en 2 filas */
	}
}

/************
17. 575px
************/

@media only screen and (max-width: 575px) {
	.carousel-item img {
		margin-top: 140px;
		height: 25vh;
		object-fit: cover;
	}

	p {
		font-size: 13px;
	}

	h2 {
		font-size: 36px;
	}

	.header.scrolled .header_content,
	.header_content {
		height: 60px;
	}

	.home {
		margin-top: 60px;
		height: calc(41vh - 60px)
	}

	.logo a>div:first-child {
		font-size: 24px;
	}

	.logo a>div:last-child {
		font-size: 10px;
	}

	.section_subtitle {
		font-size: 16px;
	}

	.header_content {
		padding-left: 15px;
		padding-right: 30px;
	}

	.button {
		height: 40px;
	}

	.button a {
		font-size: 12px;
		line-height: 36px;
		padding-left: 31px;
		padding-right: 30px;
	}

	.home_slider_dots {
		display: none !important;
	}

	.home_subtitle {
		font-size: 18px;
	}

	.home_title {
		font-size: 36px;
	}

	.cta_title {
		font-size: 28px;
	}

	.cta_phone {
		font-size: 24px;
	}

	.extra_disc>div:first-child {
		font-size: 48px;
	}

	.extra_disc>div:last-child {
		font-size: 20px;
	}

	.extra_title {
		font-size: 56px;
	}

	.newsletter {
		padding-bottom: 67px;
	}

	.newsletter_row {
		margin-top: 39px;
	}

	.newsletter_title {
		font-size: 24px;
	}

	.newsletter_input {
		width: calc(100% - 120px);
		height: 40px;
	}

	.newsletter_input::-webkit-input-placeholder {
		font-size: 13px !important;
	}

	.newsletter_input:-moz-placeholder {
		font-size: 13px !important;
	}

	.newsletter_input::-moz-placeholder {
		font-size: 13px !important;
	}

	.newsletter_input:-ms-input-placeholder {
		font-size: 13px !important;
	}

	.newsletter_input::input-placeholder {
		font-size: 13px !important;
	}

	.newsletter_button {
		width: 142px;
		height: 40px;
		font-size: 12px;
	}

	.opening_hours {
		left: auto;
		width: 100%;
	}


	.footer {
		grid-template-columns: 1fr;
		/* Una sola columna */
		grid-template-areas:
			"mapa_sitio"
			"servicios"
			"sedes"
			"contactanos_redes";
	}

	.mapa_sitio {
		justify-items: center;
		align-items: center;
	}

	.mapa_sitio img {
		width: 100px;
		margin-right: 32px;
		margin-top: -1px;
	}
	
	.servicios {
    grid-area: servicios;
    text-align: center;
}

	.servicios ul {

		justify-items: center;
		align-items: center;

	}
	
	    .sedes {
        grid-area: sedes;
        text-align: center;
    }


	.sedes ul {
		display: grid;
		grid-template-columns: 1fr;
		justify-items: center;
		align-items: center;
		padding: 0;
		list-style-type: none;
		gap: 10px;
		margin-left: 0px;
	}

	.sedes li {
		text-align: center;
		/* Asegura que el texto dentro de los <li> esté centrado */
	}

	.contactanos-redes {
		text-align: center;
	}

	.contactanos-redes ul {
		justify-content: center;
	}

	
}

/************
18. 539px
************/

@media only screen and (max-width: 539px) {}

/************
19. 480px
************/

@media only screen and (max-width: 480px) {
	.carousel-item img {
		margin-top: 140px;
		height: 19vh;
		object-fit: cover;
	}
	.copy p {
		font-size: 10px;
		color: #636363;
	}
}

/************
20. 479px
************/

@media only screen and (max-width: 479px) {}

/************
21. 414px
************/

@media only screen and (max-width: 414px) {
	.inicio {
		width: 100%;
		height: 437px;
		margin-top: 35px;
	}

	.carousel-item img {
		margin-top: 140px;
		height: 30vh;
		object-fit: cover;
	}
}

/************
22. 400px
************/

@media only screen and (max-width: 400px) {
    
}

@media only screen and (max-width: 412px) {
	.carousel-item img {
		margin-top: 140px;
		height: 21vh;
		object-fit: cover;
	}
}

@media only screen and (max-width: 394px) {
	.inicio {
		width: 100%;
		height: 348px;
		margin-top: 24px;
	}

	.carousel-item img {
		margin-top: 140px;
		height: 22vh;
		object-fit: cover;
	}
}

/************
23. 375px
************/

@media only screen and (max-width: 375px) {
	.carousel-item img {
		margin-top: 140px;
		height: 30vh;
		object-fit: cover;
	}
}



