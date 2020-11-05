import 'package:flutter/material.dart';
import 'package:flutter_mystore/modelos/item_carrinho.dart';
import 'package:flutter_mystore/pages/carrinho.dart';
import 'package:flutter_mystore/widgets/appbar_customizada.dart';
import 'package:flutter_mystore/widgets/grid_produtos.dart';

import 'widgets/paleta_cores.dart';

void main() {
  runApp(MyApp());
}


class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Flutter Demo',
      routes: {
        '/carrinho': (context) => CarrinhoPage(),
      },
      theme: ThemeData(
        primarySwatch: PaletaCores.lilas,
        textTheme: TextTheme(
          headline1: TextStyle(fontSize: 20, fontFamily: 'Alata', fontWeight: FontWeight.bold, color: Colors.black),
          headline2: TextStyle(fontSize: 20, fontFamily: 'Alata', fontWeight: FontWeight.bold, color: Colors.white),
          headline3: TextStyle(fontSize: 16, fontFamily: 'Alata', fontWeight: FontWeight.bold, color: Colors.black),
          headline4: TextStyle(fontSize: 20, fontFamily: 'Alata', fontWeight: FontWeight.bold, color: Colors.black),
          headline5: TextStyle(fontSize: 18, fontFamily: 'Alata', fontWeight: FontWeight.w100, color: Colors.black),
        ),
        visualDensity: VisualDensity.adaptivePlatformDensity,
      ),
      debugShowCheckedModeBanner: false,
      home: MyHomePage(),
    );
  }
}


class MyHomePage extends StatefulWidget {
  static List<ItemCarrinho> itensCarrinho = List();

  @override
  _MyHomePageState createState() => _MyHomePageState();
}

class _MyHomePageState extends State<MyHomePage> {

  final List moveis = [
    {
      "titulo": "Mesa",
      "preco": 300,
      "foto": "movel1.jpeg",
      "descricao":
      "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquam libero id mauris mollis convallis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus."
    },
    {
      "titulo": "Cadeira",
      "preco": 120,
      "foto": "movel2.jpg",
      "descricao":
      "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquam libero id mauris mollis convallis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus."
    },
    {
      "titulo": "Manta",
      "preco": 200,
      "foto": "movel3.jpg",
      "descricao":
      "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquam libero id mauris mollis convallis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus."
    },
    {
      "titulo": "Sofá Cinza",
      "preco": 800,
      "foto": "movel4.jpg",
      "descricao":
      "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquam libero id mauris mollis convallis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus."
    },
    {
      "titulo": "Mesa de cabeceira",
      "preco": 400,
      "foto": "movel5.jpg",
      "descricao":
      "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquam libero id mauris mollis convallis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus."
    },
    {
      "titulo": "Jogo de Cama",
      "preco": 250,
      "foto": "movel6.jpg",
      "descricao":
      "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquam libero id mauris mollis convallis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus."
    },
    {
      "titulo": "Sofá Branco",
      "preco": 900,
      "foto": "movel7.jpg",
      "descricao":
      "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquam libero id mauris mollis convallis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus."
    }
  ];

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: Colors.grey[100],
      appBar: AppBarCustomizada(
          titulo: 'Lojinha do Léo',
          ehPaginaCarrinho: false,
      ),
      body: Column(
        children: [
          Row(children: [
            Expanded(
                child: Container(
                  child: Divider(),
                  margin: EdgeInsets.only(left: 30, right: 20, top: 10, bottom: 10),
                ),
            ),
            Text('Produtos'),
            Expanded(
              child: Container(
                child: Divider(),
                margin: EdgeInsets.only(left: 20, right: 30, bottom: 10, top: 10),
              ),
            ),
          ],),
          Flexible(child: GridProdutos(moveis: moveis, atualiza: atualiza))
        ],
      )
    );
  }

  atualiza() {
    setState((){});
  }
}
