import 'package:flutter/material.dart';

class ImagemElementoGridProdutos extends StatelessWidget {

  final String imagem;
  ImagemElementoGridProdutos({this.imagem});

  @override
  Widget build(BuildContext context) {
    return Positioned.fill(
      child: Image(
        image: AssetImage('utilidades/assets/imagens/$imagem'),
        // Expande a foto para caber no máximo do tamanho do container
        fit: BoxFit.cover,
      ),
    );
  }
}
