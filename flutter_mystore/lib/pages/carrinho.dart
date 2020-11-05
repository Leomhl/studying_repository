import 'package:flutter/material.dart';
import 'package:flutter_mystore/main.dart';
import 'package:flutter_mystore/widgets/appbar_customizada.dart';
import 'package:flutter_mystore/widgets/lista_carrinho.dart';
import 'package:intl/intl.dart';

class CarrinhoPage extends StatefulWidget {
  @override
  _CarrinhoPageState createState() => _CarrinhoPageState();
}

class _CarrinhoPageState extends State<CarrinhoPage> {
    final formatacaoReais = NumberFormat.currency(locale: 'pt_BR', symbol: 'R\$');

  @override
  Widget build(BuildContext context) {
    int valorTotal = _calcularTotal();

    return Scaffold(
      appBar: AppBarCustomizada(titulo: 'Carrinho', ehPaginaCarrinho: true),
      body: _construirTela(),
      bottomNavigationBar: Container(
        color: Colors.white,
        padding: EdgeInsets.all(20),
        height: 80,
        child: Row(
          mainAxisAlignment: MainAxisAlignment.spaceBetween,
          children: [
            Text('Total', style: Theme.of(context).textTheme.headline4),
            Text(formatacaoReais.format(valorTotal), style: Theme.of(context).textTheme.headline5),
          ],
        ),
      ),
    );
  }

  atualiza() {
    setState(() {});
  }

  int _calcularTotal() {
    if(MyHomePage.itensCarrinho.isNotEmpty) {
      return MyHomePage.itensCarrinho
          .map((item) => item.movel.preco * item.quantidade)
          .reduce((precoAtual, precoNovo) => precoAtual + precoNovo);
    }

    return 0;
  }

  Widget _construirTela() {
    if(MyHomePage.itensCarrinho.isEmpty) {
      return Text('Nenhum item no carrinho');
    }

    return Container(
      child: ListaCarrinho(atualiza: atualiza),
      height: double.infinity,
      alignment: Alignment.center,
    );

  }
}