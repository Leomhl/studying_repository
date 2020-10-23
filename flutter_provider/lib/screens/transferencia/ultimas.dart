import 'package:bytebank/models/transferencias.dart';
import 'package:flutter/material.dart';
import 'package:provider/provider.dart';

import 'lista.dart';

class UltimasTransferencias extends StatelessWidget {

  final _titulo = 'Últimas transferências';

  Widget build(BuildContext context) {
    return Column(
      children: [
        Text(_titulo, style: TextStyle(fontWeight: FontWeight.bold, fontSize: 25)),
        Consumer<Transferencias>(
            builder: (context, transferencias, child) {
              final _ultimasTransferencias = transferencias.transferencias.reversed.toList();
              final _quantidade = transferencias.transferencias.length;
              int _tamanho = 2;

              if(_quantidade < 3) {
                _tamanho = _quantidade;
              }

              if(_quantidade == 0) {
                return SemTransferenciaCadastrada();
              }

              return ListView.builder(
                padding: EdgeInsets.all(8),
                itemCount: _tamanho,
                shrinkWrap: true,
                itemBuilder: (context, indice) {
                  return ItemTransferencia(_ultimasTransferencias[indice]);
                },
              );
            }
        ),
        RaisedButton(
            color: Colors.green,
            onPressed: (){
              Navigator.push(context, MaterialPageRoute(builder: (context){
                return ListaTransferencias();
              }));
            },
            child: Text('Ver todas as transferências')
        ),
      ],
    );
  }
}

class SemTransferenciaCadastrada extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Card(
      margin: EdgeInsets.all(40),
      child: Padding(
        padding: EdgeInsets.all(40),
        child: Text('Você ainda não cadastrou nenhuma transferência',
          textAlign: TextAlign.center,
        ),
      ),
    );
  }
}
