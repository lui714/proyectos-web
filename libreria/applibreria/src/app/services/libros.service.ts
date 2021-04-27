import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { environment } from 'src/environments/environment';

const URL = environment.URL;

@Injectable({
  providedIn: 'root'
})
export class LibrosService {

  constructor(private http: HttpClient) { }

  getAll(){
    let ruta = URL + 'libros';
    this.http.get(ruta)
      .subscribe ( data => {
        console.log(data);
      })
  }
}
