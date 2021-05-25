import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Subject } from 'rxjs';
import { environment } from '../../../environments/environment.prod';
import { MsnApiLibros } from '../../interfaces/LibrosInterface';

const URL = environment.url;
@Injectable({
  providedIn: 'root'
})
export class FiltrosService {

  constructor(private http:HttpClient) { }

  public categoria: number;
  public respuesta: MsnApiLibros[];
  private LibrosStorage = new Subject <MsnApiLibros[]>();
  public librosObservable = this.LibrosStorage.asObservable();

  async getFilter(idCat):  Promise<MsnApiLibros[]> {
    let ruta = URL + 'libros/filter?idCat='+idCat;
    this.categoria = idCat;
    return new Promise (resolve => {
      this.http.get<MsnApiLibros[]>(ruta)
        .subscribe (data => {
          this.respuesta = data;
         // this.LibrosStorage.next(data);
          console.log(data);
          resolve(data);
        })
    })
  }
}
