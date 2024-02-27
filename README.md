Kas ir API?

API (Application Programming Interface) ir noteikumu kopums, kas ļauj dažādām programmatūrām savā starpā komunicēt. Tas nodrošina veidu, kā viena programmatūra var piekļūt funkcionalitātei vai datiem, ko nodrošina cita programmatūra, nezinot detaļas par to, kā šī programmatūra darbojas. API tiek plaši izmantots web servisos, lai ļautu datu apmaiņu starp dažādiem sistēmām un platformām.


Kā deklarēt mainīgo PHP valodā?

PHP valodā mainīgo var deklarēt, izmantojot dolāra zīmi ($) pirms mainīgā nosaukuma. Mainīgā nosaukumam jāsākas ar burtu vai apakšsvītru. Piemērs: $mainigs = "vērtība";


Kādu arhitektūru izmanto Laravel, paskaidro kā tā strādā:
  
    Laravel izmanto MVC (Model-View-Controller) arhitektūru. MVC sadala aplikāciju trīs galvenajās daļās:
    Modelis (Model) pārvalda datus, datu iegūšanas loģiku un datu glabāšanas loģiku no datu bāzes.
    Skats (View) atbild par datu vizualizāciju, izmantojot HTML vai citu marķējumu.
    Kontrolieris (Controller) apstrādā lietotāja ievadi, saņemot pieprasījumus un nosūtot atbildes, izmantojot modeļus un skatus.
    Kontrolieris saņem lietotāja pieprasījumu, apstrādā to, izmantojot atbilstošu modeli (datu manipulācijas), un nosūta atbildi atpakaļ lietotājam, izmantojot skatu, kas parāda rezultātu.

Kas ir ORM, kāpēc to izmanto tīra SQL vietā?
    ORM (Object-Relational Mapping) ir programmēšanas tehnika, kas ļauj kartēt datu bāzes tabulas uz objektorientētas valodas klases. Tas ļauj programmētājiem strādāt ar datiem kā ar augsta līmeņa objektiem, nevis tiešiem SQL vaicājumiem, atvieglojot kodu rakstīšanu, uzturēšanu un izpratni. ORM tiek izmantots tīra SQL vietā, jo tas samazina kļūdu iespējamību, automātizē daudzas rutīnas uzdevumus un padara kodu vieglāk lasāmu.

Eloquent ORM pieprasījums modelim User:
$users = User::where('rating', '>', 4)->get();
