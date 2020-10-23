import 'package:string_validator/string_validator.dart';
import 'package:flutter/material.dart';

void main() {
  runApp(MyApp());
}

class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Aluralunos',
      theme: ThemeData(primaryColor: Colors.indigo),
      home: RegisterPage(),
    );
  }
}

class RegisterPage extends StatefulWidget {

  @override
  _RegisterPageState createState() => _RegisterPageState();
}

class _RegisterPageState extends State<RegisterPage> {

  final _formKey = GlobalKey<FormState>();

  @override
  Widget build(BuildContext context) {

    return Scaffold(
      appBar: AppBar(
        title: Text("Cadastrar alunos"),
      ),
      body: 
      // Criar o padding quando o input aparecer na tela feio
      Padding(
        padding: EdgeInsets.all(15),
        child: _buildForm()
      ),
      floatingActionButton: FloatingActionButton(
        onPressed: _saveData,
        tooltip: 'Salvar',
        child: Icon(Icons.save),
        backgroundColor: Colors.indigo,
      ),
    );
  }

  _buildForm() {

    return Form(
      // Adicionar apenas quando for criar o salvar
      key: _formKey,
      child: 

        // Mostrar quando der o erro de estouro de tela
        SingleChildScrollView(

          child: Column(
            children: [
              TextFormField(
                keyboardType: TextInputType.text,
                maxLength: 255,
                validator: (String value) {
                  return isAlpha(value) && value.isNotEmpty ? null: "Informe um nome válido, por favor!";
                }, 
                decoration: InputDecoration(labelText: "Nome"),
              ),
              
              SizedBox(height: 20),

              TextFormField(
                keyboardType: TextInputType.number,
                maxLength: 11,
                validator: (String value) {
                  return isNumeric(value)? null: "Informe um celular válido, por favor!";
                }, 
                decoration: InputDecoration(labelText: "Celular (apenas números)"),
              ),

              SizedBox(height: 20),

              TextFormField(
                keyboardType: TextInputType.emailAddress,
                maxLength: 100,
                validator: (String value) {
                  return isEmail(value) ? null: "Informe um email válido, por favor!";
                }, 
                decoration: InputDecoration(labelText: 'Email'),
              ),
          ]),
        ),
      );
  }

  _saveData() {
    if (_formKey.currentState.validate())
       print("####### Dados válidos! #######");
    else
      print("####### Dados inválidos! #######");
  }
}