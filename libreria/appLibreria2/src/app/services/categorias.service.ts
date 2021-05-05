import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { environment } from '../../environments/environment.prod';
import { Subject } from 'rxjs';
import { MsnApiCategorias } from '../interfaces/CategoriasInterface';

const URL = environment.url;

@Injectable({
  providedIn: 'root'
})
export class CategoriasService {

  constructor(private http: HttpClient) { }
  async getCategorias(): Promise<MsnApiCategorias[]> {
    let ruta = URL + 'categorias';
    console.log(ruta);
    const httpOptions = {
      headers: new HttpHeaders({
        'Accept' : 'application/json',
        'Access-Control-Allow-Origin': '*',
      })
    };
    return new Promise ( resolve => {
      this.http.get<MsnApiCategorias[]>(ruta)
      .subscribe (data => {
          resolve(data);
      });
    });

  }
}
