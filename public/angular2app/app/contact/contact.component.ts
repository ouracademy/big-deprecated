import { Component } from "@angular/core";
import Message from './message';
import { ContactService } from './contact.service';

@Component({
  selector: "contact",
  templateUrl: "angular2app/app/contact/contact.component.html",
  styleUrls: ["angular2app/app/contact/contact.component.css"]
})
export class ContactComponent {
  slider = {
    title: "Contáctenos",
    image: "img/contact/business-world.jpg",
    message: "Conéctate con nosotros"
  };
  BIG = {
    email: "info@businessideasgroup.com.pe",
    location: "Calle Ramón Cerdeira #175, dep. 301, San Borja(Perú, Lima 36)"
  };
  message: Message;

  constructor(private contactService:ContactService) {
    this.newMessage();
  }

  onSubmit() {
    this.contactService.send(this.message).then(() => {
      console.log("Enviadoo!!");
      this.newMessage();
    })
  }

  private newMessage() {
    this.message = new Message({ name: "", email: "" }, "");
  }
}
