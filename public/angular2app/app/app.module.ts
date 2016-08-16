import { NgModule }      from "@angular/core";
import { BrowserModule } from "@angular/platform-browser";

import { AppComponent }  from "./app.component";
import { routing }        from "./app.routing";

import { WelcomeComponent }  from "./welcome/welcome.component";
import { AboutComponent }  from "./about/about.component";
import { SponsorsComponent }  from "./shared/sponsors.component";
import { SliderComponent }  from "./shared/slider.component";

@NgModule({
  imports: [
    BrowserModule,
    routing
  ],
  declarations: [
    AppComponent,
    WelcomeComponent,
    AboutComponent,
    SponsorsComponent,
    SliderComponent
  ],
  bootstrap:    [ AppComponent ]
})
export class AppModule { }
