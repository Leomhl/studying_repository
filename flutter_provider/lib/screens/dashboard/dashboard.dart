import 'package:bytebank/models/saldo.dart';
import 'package:bytebank/screens/dashboard/saldo.dart';
import 'package:bytebank/screens/deposito/formulario.dart';
import 'package:bytebank/screens/transferencia/formulario.dart';
import 'package:bytebank/screens/transferencia/lista.dart';
import 'package:bytebank/screens/transferencia/ultimas.dart';
import 'package:flutter/material.dart';
import 'package:provider/provider.dart';

class Dashboard extends StatelessWidget {
  Widget build(BuildContext context) {
    return Scaffold(
        appBar: AppBar(
          title: const Text('Bytebank'),
        ),
        body: ListView(
          children: [
            Align(
              alignment: Alignment.topCenter,
              child: SaldoCard(),
            ),
            ButtonBar(
              alignment: MainAxisAlignment.center,
              children: [
                RaisedButton(
                    color: Colors.green,
                    onPressed: (){
                      Navigator.push(context, MaterialPageRoute(builder: (context){
                        return FormularioDeposito();
                      }));
                    },
                    child: Text('Receber depósito')
                ),
                RaisedButton(
                    color: Colors.green,
                    onPressed: (){
                      Navigator.push(context, MaterialPageRoute(builder: (context){
                        return FormularioTransferencia();
                      }));
                    },
                    child: Text('Realizar transferência')
                ),
              ],
            ),
            UltimasTransferencias(),
          ],
        )
    );
  }
}

