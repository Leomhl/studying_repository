import 'package:flutter/material.dart';
import 'package:flutter_mystore/main.dart';
import 'package:flutter_mystore/widgets/indicador_botao_carrinho.dart';

class BotaoCarrinho extends StatefulWidget {
  @override
  _BotaoCarrinhoState createState() => _BotaoCarrinhoState();
}

class _BotaoCarrinhoState extends State<BotaoCarrinho> {
  @override
  Widget build(BuildContext context) {

    return GestureDetector(
      child: Container(
        decoration: BoxDecoration(
          borderRadius: BorderRadius.only(
            bottomLeft: Radius.circular(100),
            topLeft: Radius.circular(100),
          ),
          color: Colors.white,
        ),
        height: 40,
        padding: EdgeInsets.only(right: 20, left: 20),
        alignment: Alignment.centerRight,
        child: _visibilidadeIndicadorCarrinho(),
      ),
      onTap: () {
        Navigator.pushNamed(context, '/carrinho')
            .then((value) => setState(() {}));
      },
    );
  }

  _visibilidadeIndicadorCarrinho() {
    if(MyHomePage.itensCarrinho.length > 0) {
      return Stack(
        children: [
          Image(
            height: 30,
            image: AssetImage('utilidades/assets/icones/carrinho.png'),
          ),
          IndicadorBotaoCarrinho(),
        ],
      );
    }
    return Image(
      height: 30,
      image: AssetImage('utilidades/assets/icones/carrinho.png'),
    );
  }
}
