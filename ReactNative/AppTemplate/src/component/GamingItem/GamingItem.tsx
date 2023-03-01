import React from 'react';
import {
    TouchableOpacity,
    Text,
    Image,
} from 'react-native';
import gamingStyles from './style';

const GamingItem = ({item}:any) => {
    return(
        <TouchableOpacity style={gamingStyles.scrolableListItem}>
            <Image source={item.src} style={gamingStyles.itemImage}/>
            <Text style={gamingStyles.mainText}>{item.mainText}</Text>
            <Text style={gamingStyles.subText}>{item.subText}</Text>
        </TouchableOpacity>
    )
}

export default GamingItem;