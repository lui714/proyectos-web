import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { environment } from '../../environments/environment.prod';
import { MsnApiLibros } from '../interfaces/LibrosInterface';
import { Subject } from 'rxjs';

const URL = environment.url;

@Injectable({
  providedIn: 'root'
})
export class LibrosService {

  constructor(private http: HttpClient) { }

  getFilter(idCat) {
    let ruta = URL + 'libros/filter';
    let data = JSON.stringify({idCat});
    console.log (data);
  }
  async filtrar(filtros: number[]): Promise<MsnApiLibros[]>{
    let ruta = URL + 'filter/libros';
    let data = JSON.stringify(filtros);
    console.log (data);
    return new Promise (resolve => {
      this.http.get<MsnApiLibros[]>(ruta)
        .subscribe (data => {
        })
    })
  }

  async getLibros(): Promise<MsnApiLibros[]> {
    let ruta = URL + 'libros';
    console.log(ruta);
    const httpOptions = {
      headers: new HttpHeaders({
        'Accept' : 'application/json',
        'Access-Control-Allow-Origin': '*',
      })
    };
    return new Promise ( resolve => {
      this.http.get<MsnApiLibros[]>(ruta)
      .subscribe (data => {
          resolve(data);
      })
    })
  }

}
