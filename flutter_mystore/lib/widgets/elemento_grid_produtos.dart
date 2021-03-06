import 'package:flutter/material.dart';
import 'package:flutter_mystore/modelos/movel.dart';
import 'package:flutter_mystore/pages/detalhes.dart';
import 'package:flutter_mystore/widgets/titulo_elemento_grid_produtos.dart';
import 'degrade_elemento_grid_produtos.dart';
import 'imagem_elemento_grid_produtos.dart';



class ElementoGridProdutos extends StatelessWidget {

  final Movel movel;
  final Function atualiza;
  ElementoGridProdutos({this.movel, this.atualiza});

  @override
  Widget build(BuildContext context) {
    return InkWell(
      onTap: (){
        Navigator.push(context, 
            MaterialPageRoute(builder: (context) => DetalhesPage(movel: movel))
        ).then((value) => atualiza());
      },
      child: Container(
        decoration: BoxDecoration(
          boxShadow: [
            BoxShadow(
              spreadRadius: 2,
              blurRadius: 8,
              color: Colors.black12,
            ),
          ],
        ),
        margin: EdgeInsets.all(10),
        child: ClipRRect(
          borderRadius: BorderRadius.circular(8),
          child: Stack(
            alignment: Alignment.center,
            children: [
              ImagemElementoGridProdutos(imagem: movel.foto),
              DegradeElementoGridProdutos(),
              TituloElementoGridProdutos(
                titulo: movel.titulo,
              ),
            ],
          ),
        ),
      ),
    );
  }

}
