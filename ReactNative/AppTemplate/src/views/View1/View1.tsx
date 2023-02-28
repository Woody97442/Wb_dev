import React, { useEffect, useState } from 'react';
import * as commonStyle from '../../utils/commonStyle';
import { Button, ButtonGroup, withTheme, Text } from '@rneui/themed';
import { SafeAreaProvider } from 'react-native-safe-area-context';
import Icon from 'react-native-vector-icons/FontAwesome';

import {
    SafeAreaView,
    StyleSheet,
    ScrollView,
    View,
    StatusBar,
    Image,
    FlatList,
    TouchableOpacity,
    ActivityIndicator,
} from 'react-native';


const View1 = (props:any) => {

    const goTo = () =>{
        console.log('props', props);
        props.navigation.push('View2', {
            // key: value;
        });
    }

    return (
        <SafeAreaProvider>
            <View style={styles.main_container}>

                <Text style={styles.title}>EXEMPLE</Text>

                <TouchableOpacity onPress={() => goTo()}>
                    <View style={styles.button_Container}>
                        <Text style={styles.button_Navigation}>Let's Go !</Text>
                    </View>
                </TouchableOpacity>

            </View>
        </SafeAreaProvider>

    );
};


const styles = StyleSheet.create({
    main_container: {
      flex: 1,
      backgroundColor: '#fff',
      alignItems:'center',
      justifyContent:'center',
    },
    title: {
      fontSize:35,
    },
    button_Container: {
        width: 200,
        marginHorizontal: 50,
        marginVertical: 50,
    },
    button_Navigation: {
        backgroundColor: 'rgba(90, 154, 230, 1)',
        borderColor: 'transparent',
        borderWidth: 0,
        borderRadius: 30,
        padding:15,
        textAlign:'center',
        fontSize:25,
        color:'#fff',
    }
});


export default View1;