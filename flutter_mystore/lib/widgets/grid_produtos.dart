import 'package:flutter/material.dart';
import 'package:flutter_mystore/modelos/movel.dart';

import 'elemento_grid_produtos.dart';

class GridProdutos extends StatelessWidget {

  final moveis;
  final Function atualiza;

  GridProdutos({this.moveis, this.atualiza});

  @override
  Widget build(BuildContext context) {
    return GridView.builder(
        gridDelegate: SliverGridDelegateWithFixedCrossAxisCount(
          crossAxisCount: 2
        ),
        itemCount: moveis.length,
        itemBuilder: (BuildContext context, int index) {
          final movel = Movel.fromJson(moveis[index]);
          return ElementoGridProdutos(movel: movel, atualiza: atualiza,);
        },
    );
  }
}
