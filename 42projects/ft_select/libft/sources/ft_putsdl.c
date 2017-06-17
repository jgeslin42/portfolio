/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   ft_putsdl.c                                        :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: jgeslin <jgeslin@student.42.fr>            +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2016/05/11 18:42:50 by jgeslin           #+#    #+#             */
/*   Updated: 2016/05/11 18:42:52 by jgeslin          ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

#include "../includes/libft.h"
#include <unistd.h>

void	ft_putsdl(char const *s)
{
	write(1, "\n", 1);
	write(1, s, ft_strlen(s));
}
