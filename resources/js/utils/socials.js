//acrive sound and notification
document.addEventListener('DOMContentLoaded', function() {
    var badge = document.querySelector('.badge-wtsp');
    
  
    setTimeout(function() {
        badge.classList.remove('hide');
        var notificationSound = document.getElementById('notificationSound');
        notificationSound.play()
        .catch(function(error) {
            console.log('-');
        });
    }, 5000);

  });
  
  //accion al dar clic al boton
  document.querySelector('.btn-whatsapp').addEventListener('click', function(event) {
    event.preventDefault();
    var popupContent = document.querySelector('.popup-content');
    popupContent.classList.toggle('hide');

    var btnWhatsApp = this;
    var icon = btnWhatsApp.querySelector('i');
  
    // Alternar entre el icono de WhatsApp y el icono de la equis (x)
    icon.classList.toggle('fa-whatsapp');
    icon.classList.toggle('fa-times');
    icon.classList.toggle('fab');
    icon.classList.toggle('fas');

    setTimeout(function() {
        var chatBackground = document.querySelector('.chat-background');
        chatBackground.classList.add('hide');

        var messageText = document.querySelector('.message-text');
        messageText.classList.remove('hide');
    }, 800);
    setTimeout(function() {
        var messageText = document.querySelector('.message-text-2');
        messageText.classList.remove('hide');
    }, 1500);
      
  });