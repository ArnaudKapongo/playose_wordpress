<?php  

/* Template Name: Contact page*/

?> 

<?php get_header() ?>

<div class="contact">
      <h1 class="contact_title">CONTACT</h1>
      <div class="info-contact">
        <p class="email_playose"> EMAIL</p>
        <p class="email_press">CONTACT@PLAYOSE.FR</p>
        <p class="email_press">PRESS@PLAYOSE.FR</p>
      </div>
      <div class="formwrapper">
        <form class="from-contact">
          <input placeholder="ADRESSE EMAIL" type="text" class="inputcontact input"/>
          <input placeholder="SUJET" type="text" class="inputcontact inputcontactsuject"/>
          <br/>
          <textarea placeholder="MESSAGE" type="text" class="inputcomments"></textarea>
          <button class="redbutton to-left">Envoyer</button>
        </form>
      </div>
    </div>

<?php get_footer() ?>