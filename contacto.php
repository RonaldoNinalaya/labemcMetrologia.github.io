<?php include('./template/header.php')?>
<link rel="stylesheet" href="./css/contact.css">

<div class="portada-contact">
  <h2>Contactanos</h2>
</div>
<main>
  <section class="contact-container">
    <!-- map -->
    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.564987671661!2d-76.99408942562762!3d-12.004573641115204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c78e7957a2cf%3A0x16ab9a830931a80e!2sLABMEC%20ENERGIA%20XXI%20EIRL!5e0!3m2!1ses!2spe!4v1705676199741!5m2!1ses!2spe" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- formulario -->
    <div class="form-container">
      <form action="" class="contact-form">
        <label for="nombre">Nombre completo</label>
        <input class="campo" type="text" name="nombre" id="nombre">

        <label for="email">Correo Electrónico</label>
        <input class="campo" type="email" name="email" id="email">

        <label for="asunto">Asunto</label>
        <input class="campo" type="text" name="asunto" id="asunto">

        <label for="textarea">Mensaje</label>
        <textarea name="textarea" id="textarea" cols="10" rows="5"></textarea>

        <input class="btn-enviar" type="submit" value="enviar mensaje">
      </form>
    </div>

  </section>
</main>

<script src="./js/contact.js"></script>
<?php include './template/footer.php' ?>

