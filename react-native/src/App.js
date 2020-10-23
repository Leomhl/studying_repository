import React from 'react';
import { View, Text, StyleSheet } from 'react-native';
import  Simple  from './components/Simple';
import  ParImpar  from './components/ParImpar';

class App extends React.Component {
  render() {
    return (
      <View style={styles.container}>
        <Simple text="Aqui temos um componente simples em arrow"/>
        <ParImpar numero={30}/>
      </View>
    );
  }
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
  },
  f20: {
    fontSize: 20,

  }
});

export default App;