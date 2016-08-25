import { NgModule }      from "@angular/core";
import { BrowserModule } from "@angular/platform-browser";
import { HttpModule }     from '@angular/http';
import { ReactiveFormsModule }   from '@angular/forms';

import { AppComponent }  from "./app.component";
import { routing }        from "./app.routing";

import { WelcomeComponent }  from "./welcome/welcome.component";
import { AboutComponent }  from "./about/about.component";
import { ContactComponent }  from "./contact/contact.component";
import { ContactService } from './contact/contact.service';
import { EventListComponent }  from "./event/event-list.component";
import { EventDetailComponent } from "./event/event-detail.component";
import { EventService } from './event/event.service';
import { SponsorsComponent }  from "./shared/sponsors.component";
import { SliderComponent }  from "./shared/slider.component";

@NgModule({
  imports: [
    BrowserModule,
    routing,
    HttpModule,
    ReactiveFormsModule
  ],
  declarations: [
    AppComponent,
    WelcomeComponent,
    AboutComponent,
    EventListComponent,
    EventDetailComponent,
    ContactComponent,
    SponsorsComponent,
    SliderComponent
  ],
  providers: [
    ContactService,
    EventService
  ],
  bootstrap:    [ AppComponent ]
})
export class AppModule { }
