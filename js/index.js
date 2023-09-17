function sendMail() {
  var params = {
    name: document.getElementById("name").value,
    email: document.getElementById("email").value,
    subject: document.getElementById("subject").value,
    message: document.getElementById("message").value,
  };

  const serviceID = "service_iwvrrn9";
  const templateID = "template_eqlf6i6";

    emailjs.send(serviceID, templateID, params)
    .then(res=>{
        document.getElementById("name").value = "";
        document.getElementById("email").value = "";
        document.getElementById("subject").value = "";
        document.getElementById("message").value = "";
        console.log(res);
        alert("Your message sent successfully! I will response your message as soon as possible... Thanks for your message :) ")

    })
    .catch(err=>console.log(err));

}


document.addEventListener("DOMContentLoaded", function() {
  var scrollToTopButton = document.getElementById("scroll-to-top-button");

  window.addEventListener("scroll", function() {
      if (window.scrollY > 100) {
          scrollToTopButton.classList.remove("hidden");
      } else {
          scrollToTopButton.classList.add("hidden");
      }
  });

  scrollToTopButton.addEventListener("click", function() {
      window.scrollTo(0, 0);
  });
});