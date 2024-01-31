<?php
/* 
Esercizio 1: Testa o Croce. Creare una funzione che, ad ogni invocazione, restituisca casualmente Testa o Croce. 

Esercizio 2: Area di un triangolo. creare una funzione che calcoli l'area di un triangolo. L'utente passerà in un form la base e l'altezza. Assicurarsi che i valori in input siano di tipo integer o float. Eseguire due invocazioni, dovranno uscire questi risultati:

Esercizio 3: Somma per riferimento. Creare una funzione ricorsiva che prende in input una sola una variabile inizializzata a 10. Questo numero andrà ridotto di 1 unità ad ogni ricorsione. Effettuare la somma di tutti i numeri ad ogni ricorsione. Alla fine, mostrare sia la somma finale (che dovrà essere di valore 55), sia la variabile che dovrà avere valore 1. 

Esercizio 4: Sequenza di Fibonacci. La sequenza di Fibonacci è una serie in cui ogni numero successivo è la somma dei due numeri precedenti. Gli inizi della sequenza sono 0 e 1. Stampare a schermo 10 successioni.

Esercizio 5: Elenco di alunni. Creare una funzione per riempire un array di alunni e stamparli. Inizialmente, per evitare errori, sarà obbligatorio inserire almeno due alunni: "Martina" e "Agostino". Nell'invocazione si potranno passare quanti studenti desideriamo. Questi verranno aggiunti dinamicamente all'array degli alunni, e infine stamparli in pagina con le loro posizioni. 

*/

/*esercizio 1*/

function testaCroce($numero) {
   
    if ($numero == 0) {
      return "Testa";
    } else {
      return "Croce";
    }
  }

  echo testaCroce (1);
  
/*esercizio 3*/

function sommaPerriferimento($numero) {

       $numero = 10;

  
  }

/*esercizio 5*/

function Elencodialunni($primoAlunno, $secondoAlunno) {
   

}

Elencodialunni(
  
    primoAlunno: "Martina",
    secondoAlunno: "Agostino",

)


?>