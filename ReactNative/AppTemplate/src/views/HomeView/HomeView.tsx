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
import homeStyles from './style';
import { FakeActivitys } from '../../data/FakeActivitys';
import GamingItem from '../../component/GamingItem/GamingItem';



const HomeView = () => {

    return (
        <ScrollView>
            {/* Debut du header */}
            <View style={homeStyles.header}>
                <Text style={homeStyles.titleApp}>Gaming Booster</Text>
                <Image source={require('../../assets/images/avatar.jpg')} style={homeStyles.userImg}/>
            </View>
            {/* Fin du header */}

            {/* Liste des Jeux video */}
            <FlatList 
            data={FakeActivitys}
            keyExtractor={item => item.id}
            horizontal={true}
            showsHorizontalScrollIndicator={false}
            style={homeStyles.scrolableList}
            renderItem={({item}:any) => {
                return(
                    <GamingItem item={item}/>
                );
            }} 
            />
            {/* Fin de liste Jeux video */}

            {/* Liste Jeux video */}
            <View style={homeStyles.currentlyGameContainer}>
                <Text style={homeStyles.currentlyGameTilte}>En ce Momment</Text>
                <Image source={require('../../assets/images/hogward_legacy.jpg')} style={homeStyles.currentlyGameImg}/>
            </View>
            {/* Fin de liste Jeux video */}

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