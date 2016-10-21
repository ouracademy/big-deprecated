import { Component, HostBinding } from "@angular/core";

@Component({
  moduleId: module.id,
  selector: "welcome",
  templateUrl: "welcome.component.html",
  styleUrls: ["welcome.component.css"]
})
export class WelcomeComponent {
  public slides = [
    {
      phrase: 'El mundo espera por ti',
      subphrase: 'Ven y renueva tu mente'
    },
    { phrase: 'Grandes personas vienen de una gran educación' },
    { phrase: 'Formando a grandes personas' }
  ];
  
  // @HostBinding('slide')
  // @HostBinding('class.image-background')
  // addImageBackground: boolean = true;
}
