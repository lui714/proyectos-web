import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HeaderComponent } from './estructura/header/header.component';
import { MainComponent } from './estructura/main/main.component';
import { FooterComponent } from './estructura/footer/footer.component';
import { LogoComponent } from './estructura/header/logo/logo.component';
import { MenuComponent } from './estructura/header/menu/menu.component';
import { UsuariosComponent } from './estructura/header/usuarios/usuarios.component';
import { CuerpoComponent } from './estructura/main/cuerpo/cuerpo.component';
import { AsideComponent } from './estructura/main/aside/aside.component';
import { CopyrightComponent } from './estructura/footer/copyright/copyright.component';
import { EnlacesComponent } from './estructura/footer/enlaces/enlaces.component';
import { RrssComponent } from './estructura/footer/rrss/rrss.component';

@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    MainComponent,
    FooterComponent,
    LogoComponent,
    MenuComponent,
    UsuariosComponent,
    CuerpoComponent,
    AsideComponent,
    CopyrightComponent,
    EnlacesComponent,
    RrssComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
