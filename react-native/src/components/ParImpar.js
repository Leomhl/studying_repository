import React from 'react';
import { View, Text } from 'react-native';
import Padrao from '../estilo/Padrao';

function parOuImpar(numero) {
    if(numero % 2 == 0)
        return <Text style={Padrao.ex}>Par</Text>;
    <Text style={Padrao.ex}>Ímpar</Text>
}

export default props => 
    <View>
        { parOuImpar(props.numero) }
    </View>