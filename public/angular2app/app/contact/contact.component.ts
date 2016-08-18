import { Component } from "@angular/core";
import Message from './message';
import { ContactService } from './contact.service';
import { FormBuilder, FormGroup, Validators, FormControl } from '@angular/forms';

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
  submitAttemp: boolean = false;
  
  contactForm: FormGroup;
  message: FormControl;
  name: FormControl;
  email: FormControl;

  constructor(private contactService:ContactService,
              builder: FormBuilder) {
    this.message = new FormControl("", Validators.required);
    this.name = new FormControl("", Validators.required);
    this.email = new FormControl("", Validators.required);

    this.contactForm = builder.group({
      message: this.message,
      from: builder.group({
        name: this.name,
        email: this.email
      })
    });
  }

  onSubmit() {
    this.contactService.send(<Message>this.contactForm.value).then(() => {
      this.contactForm.reset();
      this.submitAttemp = true;
    })
  } 
}
