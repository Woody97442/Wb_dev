import React, { useEffect, useState } from 'react';
import { Button, ButtonGroup, withTheme, Text, Avatar } from '@rneui/themed';
import { SafeAreaProvider } from 'react-native-safe-area-context';
import './style';

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


const HomeView = () => {

    return (
        <ScrollView>
            {/* Debut du header */}
            <View style={styles.main_container}>
                
                <Text>Jhone Doe</Text>
                <Image source={require('../../assets/images/avatar.jpg')}/>
            </View>
            {/* Fin du header */}
        </ScrollView>
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
    }
});


export default HomeView;