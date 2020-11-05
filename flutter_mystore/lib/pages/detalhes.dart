import 'package:flutter/material.dart';
import 'package:flutter_mystore/modelos/movel.dart';
import 'package:flutter_mystore/widgets/appbar_customizada.dart';
import 'package:flutter_mystore/widgets/card_detalhes.dart';

class DetalhesPage extends StatefulWidget {
  @override
  _DetalhesPageState createState() => _DetalhesPageState();

  final Movel movel;
  DetalhesPage({this.movel});
}

class _DetalhesPageState extends State<DetalhesPage> {

  void initState() {
    super.initState();
  }

  @override
  Widget build(BuildContext context) {
    return Container(
      decoration: BoxDecoration(
        image: DecorationImage(
          fit: BoxFit.cover,
          image: AssetImage('utilidades/assets/imagens/${widget.movel.foto}'),
        ),
      ),
      child: Scaffold(
          backgroundColor: Colors.transparent,
          appBar: AppBarCustomizada(titulo: '', ehPaginaCarrinho: false),
          body: Align(
            alignment: Alignment.bottomCenter,
            child: Container(
              margin: EdgeInsets.all(16),
              height: 220,
              child: CardDetalhes(movel: widget.movel, atualizaPagina: atualiza),
            ),
          )
      ),
    );
  }

  atualiza() {
    setState(() {});
  }
}
