import 'package:flutter/material.dart';
import 'package:flutter_mystore/main.dart';
import 'package:flutter_mystore/modelos/item_carrinho.dart';
import 'package:intl/intl.dart';
import 'package:flutter_mystore/modelos/movel.dart';
import 'package:flutter_mystore/widgets/texto_detalhes.dart';

class CardDetalhes extends StatelessWidget {

  final formatacaoReais = NumberFormat.currency(locale: 'pt_BR', symbol: 'R\$');
  final Movel movel;
  final Function atualizaPagina;

  CardDetalhes({this.movel, this.atualizaPagina});

  @override
  Widget build(BuildContext context) {
    return Card(
      child: Column(
        crossAxisAlignment: CrossAxisAlignment.start,
        children: [
          TextoDetalhes(texto: movel.titulo, estilo: Theme.of(context).textTheme.headline1),
          TextoDetalhes(texto: movel.descricao),
          Container(
            margin: EdgeInsets.only(left: 16, right: 16, top: 16, bottom: 8),
            child: Row(
              mainAxisAlignment: MainAxisAlignment.spaceBetween,
              children: [
                Text(formatacaoReais.format(movel.preco), style: Theme.of(context).textTheme.headline1),
                FlatButton(onPressed: (){
                  _verificarListaItemCarrinho(MyHomePage.itensCarrinho, ItemCarrinho(quantidade: 1, movel: movel), context);
                },

                child: Text('Comprar', style: TextStyle(color: Colors.white)),
                color: Theme.of(context).primaryColor,
                ),
              ],
            ),
          ),
        ],
      )
    );
  }

  _adicionarItemCarrinho(ItemCarrinho item, BuildContext context) {
    MyHomePage.itensCarrinho.add(item);
    atualizaPagina();

    Scaffold.of(context).showSnackBar(SnackBar(
      content: Text("Item adicionado ao carrinho!"),
      duration: Duration(seconds: 3),
    ));
  }

  _verificarListaItemCarrinho(List<ItemCarrinho> lista, ItemCarrinho item, context) {
    int indiceMovel = lista.indexWhere((item) => item.movel == movel);

    if(indiceMovel >= 0)
      lista[indiceMovel].quantidade = lista[indiceMovel].quantidade + 1;
    else
      _adicionarItemCarrinho(item, context);
  }
}
