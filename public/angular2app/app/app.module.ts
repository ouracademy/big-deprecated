import { NgModule }      from "@angular/core";
import { BrowserModule } from "@angular/platform-browser";
import { HttpModule }     from '@angular/http';
import { FormsModule }   from '@angular/forms';

import { AppComponent }  from "./app.component";
import { routing }        from "./app.routing";

import { WelcomeComponent }  from "./welcome/welcome.component";
import { AboutComponent }  from "./about/about.component";
import { ContactComponent }  from "./contact/contact.component";
import { ContactService } from './contact/contact.service';
import { EventListComponent }  from "./event/event-list.component";
import { SponsorsComponent }  from "./shared/sponsors.component";
import { SliderComponent }  from "./shared/slider.component";

@NgModule({
  imports: [
    BrowserModule,
    routing,
    HttpModule,
    FormsModule
  ],
  declarations: [
    AppComponent,
    WelcomeComponent,
    AboutComponent,
    EventListComponent,
    ContactComponent,
    SponsorsComponent,
    SliderComponent
  ],
  providers: [
    ContactService
  ],
  bootstrap:    [ AppComponent ]
})
export class AppModule { }
