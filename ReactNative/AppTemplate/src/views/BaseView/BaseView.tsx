import React from 'react';
import { Button, ButtonGroup, withTheme, Text, Avatar } from '@rneui/themed';

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


const BaseView = () => {

    return (
        <View style={styles.main_container}>

            <Text>BaseView !</Text>

        </View>
    );
};


const styles = StyleSheet.create({
    main_container: {
      flex: 1,
      backgroundColor: '#fff',
      alignItems:'center',
      justifyContent:'center',
    }

});


export default BaseView;