import { Component, ViewContainerRef } from '@angular/core';

@Component({
  moduleId: module.id,
  selector: 'app',
  templateUrl: 'app.component.html'
})
export class AppComponent {
  private viewContainerRef: ViewContainerRef;
  public isMenuCollapsed: boolean = true;

  public constructor(viewContainerRef: ViewContainerRef) {
    // You need this small hack in order to catch application root view container ref
    this.viewContainerRef = viewContainerRef;
  }

  onActivate(e) {
    window.scrollTo(0, 0);
  }

  track($event: Event) {
    // TODO refactor to an angular 2 way..
    let doc = document.documentElement;
    let top = (window.pageYOffset || doc.scrollTop) - (doc.clientTop || 0);
    let scrollUp = window.document.getElementById('scrollUp');

    if (top < 350) {
      scrollUp.style.display = 'none';
    } else {
      scrollUp.style.display = 'inline-block';
    }
  }

  public collapsed(event: any): void {
    // Do nothing
  }

  public expanded(event: any): void {
    // Do nothing
  }
}
